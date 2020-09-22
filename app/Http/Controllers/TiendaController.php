<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Category;
use App\Http\Models\Producto;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\RedirectResponse;



class TiendaController extends Controller
{
   
                
    public function postSearch(Request $request){
        if($request->input('category') == '4' ):
            
            if($request->has('name')):
                
            endif;
        else:
            //$categoria = Category::where('id',$request->input('category'))->pluck('name');
            
            $categoria = $request->input('category');
            $filtro = $request->input('name');
            //return 'si se escojio cate';
            return redirect('productos/'.$categoria);
        endif;
    }

    public function getProductoCat($categoria){
        $cats = Category::orderBy('id','Desc')->pluck('name','id');
        $productos = Producto::where('category_id',$categoria)->get();
        $data = ['productos' => $productos, 'cats' => $cats];
        return view('productosgrid',$data);
    }

    public function getProducto($categoria,$producto){
        $cats = Category::orderBy('id','Desc')->pluck('name','id');
        $productos = Producto::where('slug',$producto)->get();
        $data = ['productos' => $productos, 'cats' => $cats];
        return view('viewProducto',$data);
    }

    public function carrito(){
        return view('carrito');
    }

    public function pago(){
        $cats = Category::orderBy('id','Desc')->pluck('name','id');
        $data = ['cats' => $cats];
        return view('procesodepago',$data);
    }
}
