<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Http\Models\Category;

class CategoriesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function getHome(){
        $cats = Category::orderBy('id','Desc')->get();
        $data = ['cats' => $cats];
        return view('admin.categories.home', $data);
    }

    public function getAddCategorie(){
        return view('admin.categories.add');
    }

    public function postCategoriesRegister(Request $request){

        $rules = [
            'name' => 'required|unique:App\Http\Models\Category'
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()): 
            return back()->withErrors($validator) -> with('message','Se ha producido un error');
        else:
            $category = new Category;
            $category -> name = e($request->input('name'));

            if($category->save()): 
                return redirect('/admin/categories/add')->with('message','Su categoria se creó 
                correctamente.')->with('typealert', 'success');
            endif;
        endif;
    }

    public function getEdit($id){
        $cat = Category::find($id);
        $data = ['cat' => $cat];
        return view('admin.categories.edit',$data);
    }

    public function postEdit(Request $request,$id){
        $rules = [
            'name' => 'required|unique:App\Http\Models\Category'
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()): 
            return back()->withErrors($validator) -> with('message','Se ha producido un error');
        else:
            $category = Category::find($id);
            $category -> name = e($request->input('name'));

            if($category->save()): 
                return redirect('/admin/categories')->with('message','Su categoria se creó 
                correctamente.')->with('typealert', 'success');

            else:
            return redirect('/admin');
            endif;
        endif;
    }

    public function getDelete($id){

            $category = Category::find($id);

            if($category->delete()): 
                return redirect('/admin/categories')->with('message','Su categoria se elimino 
                correctamente.')->with('typealert', 'success');
            endif;
    }
}
