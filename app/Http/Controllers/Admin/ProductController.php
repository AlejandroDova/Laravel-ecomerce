<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Category;
use App\Http\Models\Producto;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function getHome(){
        $producto = DB::select('select * from productos');
        $data = ['producto' => $producto];
        return view('admin.products.home', $data);
    }

    public function getProductAdd(){
        $cats = Category::orderBy('id','Desc')->pluck('name','id');
        $data = ['cats' => $cats];
        return view('admin.products.add',$data);
    }

    public function postProductAdd(Request $request){

        $rules =[
            'name' => 'required',
            'price' => 'required',
            'content' => 'required'
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()): 
            return back()->withErrors($validator) -> with('message','Se ha producido un error')->whitInput();
        else:
            $foto = '';
            if($request->hasFile('img')):
                $foto = $request->file('img')->store('uploads','public');
            endif;

            $producto = new Producto;
            $producto -> status = '0';
            $producto -> name = e($request->input('name'));
            $producto -> slug = Str::slug($request->input('name'));
            $producto -> category_id = $request->input('category');
            $producto -> image = $foto;
            $producto -> amount = $request->input('price');
            $producto -> in_discount =  $request->input('indiscount');
            $producto -> discount = $request->input('discount');
            $producto -> content = e($request->input('content'));


            if($producto->save()): 
                return redirect('/admin/products/add')->with('message','Su producto se creó 
                correctamente.')->with('typealert', 'success');
            endif;

        endif;
    }

    public function getEdit($id){
        $producto = Producto::find($id);
        $cats = Category::orderBy('id','Desc')->pluck('name','id');
        $data = ['producto' => $producto, 'cats' => $cats];
        return view('admin.products.edit', $data);
    }

    public function postEdit(Request $request,$id){
        $rules = [
            'name' => 'required|unique:App\Http\Models\Category'
        ];

        

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()): 
            return back()->withErrors($validator) -> with('message','Se ha producido un error');
        else:

            $foto = '';
            if($request->hasFile('img')):
                $foto = $request->file('img')->store('uploads','public');
                $producto = Producto::find($id);
                $producto -> status = '0';
                $producto -> name = e($request->input('name'));
                $producto -> slug = Str::slug($request->input('name'));
                $producto -> category_id = $request->input('category');
                $producto -> image = $foto;
                $producto -> amount = $request->input('price');
                $producto -> in_discount =  $request->input('indiscount');
                $producto -> discount = $request->input('discount');
                $producto -> content = e($request->input('content'));
            else: 
                $producto = Producto::find($id);
                $producto -> status = '0';
                $producto -> name = e($request->input('name'));
                $producto -> slug = Str::slug($request->input('name'));
                $producto -> category_id = $request->input('category');
                $producto -> amount = $request->input('price');
                $producto -> in_discount =  $request->input('indiscount');
                $producto -> discount = $request->input('discount');
                $producto -> content = e($request->input('content'));
            endif;
            if($producto->save()): 
                return redirect('/admin/products')->with('message','Su Producto se creó 
                correctamente.')->with('typealert', 'success');
            endif;
        endif;
    }

    public function getDelete($id){
        $producto = Producto::find($id);

            if($producto->delete()): 
                return redirect('/admin/products')->with('message','Su categoria se elimino 
                correctamente.')->with('typealert', 'success');
            endif;
    }
}
