<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $cats = App\Http\Models\Category::orderBy('id','Desc')->pluck('name','id');
    $oferta = App\Http\Models\Producto::where('in_discount',"1")->get();
    $destacado = App\Http\Models\Producto::orderBy('id','Desc')->paginate(10);
    $alebrijes = App\Http\Models\Producto::where('category_id',"2")->paginate(6);
    $data = ['cats' => $cats, 'oferta' => $oferta, 'destacado' => $destacado, 'alebrijes' => $alebrijes];
    
    return view('home',$data);
});

// router auht
Route::post('/login','ConnectController@postLogin')->name('login');
Route::get('/login','ConnectController@getLogin')->name('login');
Route::get('/register','ConnectController@getRegister')->name('register');
Route::post('/register','ConnectController@postRegister')->name('register');
Route::get('/logout','ConnectController@getLogout')->name('logout');
Route::get('/nosotros','NosotrosController@getNosotros')->name('Nosotros');
Route::post('/email','NosotrosController@postEmail')->name('Email');

Route::post('/search','TiendaController@postSearch')->name('search');
Route::get('/productos/{categoria}', 'TiendaController@getProductoCat');
Route::get('/productos/{categoria}/{producto}', 'TiendaController@getProducto');

Route::get('/compra/carrito/agregar/{slug}', 'CartController@add');
Route::get('/compra/carrito/mostrar', 'CartController@show');
Route::get('/compra/carrito/borrarCarrito', 'CartController@cartTrash');
Route::get('/compra/carrito/eliminarItem/{id}', 'CartController@cartDeleteItem');

Route::get('/compra/procesodepago', 'TiendaController@pago');

Route::get('/payment', 'PaymentController@index');
Route::post('/charge', 'PaymentController@charge');