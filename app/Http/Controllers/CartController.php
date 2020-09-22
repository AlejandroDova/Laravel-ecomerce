<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Producto;
use App\Http\Models\Category;

class CartController extends Controller
{
    public function __construct(){
        if(!\Session::has('cart')) \Session::put('cart',array());
    }

    public function show(){
        $cats = Category::orderBy('id','Desc')->pluck('name','id');
        $cart = \Session::get('cart');
        $data = ['cats' => $cats,'cart' => $cart];
        return view('carrito',$data);
    }

    public function add($id){
        $productos = Producto::where('id',$id)->first();
        if (! $productos) {
            return \Redirect::back()->with('flash_error', 'No se ha encontrado');
        }
        
        $cart = \Session::get('cart');
        $cart[$productos->slug] = $productos;
        \Session::put('cart',$cart);

        return redirect('compra/carrito/mostrar');
    }

    public function cartDeleteItem($id){
        $productos = Producto::where('id',$id)->first();
        $cart = \Session::get('cart');
        unset($cart[$productos->id]);
        \Session::put('cart', $cart);

        return back();
    }

    public function cartTrash(){
        \Session::forget('cart');
        return back();
    }
}
