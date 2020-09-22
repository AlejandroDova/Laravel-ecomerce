<?php

Route::prefix('/admin')->group(function(){
     Route::get('/', 'Admin\DashboardController@getDashboard');

     Route::get('/user', 'Admin\UserController@getUsers');

     Route::get('/products', 'Admin\ProductController@getHome');
     Route::get('/products/add', 'Admin\ProductController@getProductAdd');
     Route::post('/products/add', 'Admin\ProductController@postProductAdd');
     Route::get('/products/{id}/edit', 'Admin\ProductController@getEdit');
     Route::post('/products/{id}/edit', 'Admin\ProductController@postEdit');
     Route::get('/products/{id}/delete', 'Admin\ProductController@getDelete');

     Route::get('/categories', 'Admin\CategoriesController@getHome');
     Route::get('/categories/add', 'Admin\CategoriesController@getAddCategorie');
     Route::post('/categories/add', 'Admin\CategoriesController@postCategoriesRegister');
     Route::get('/categories/{id}/edit', 'Admin\CategoriesController@getEdit');
     Route::post('/categories/{id}/edit', 'Admin\CategoriesController@postEdit');
     Route::get('/categories/{id}/delete', 'Admin\CategoriesController@getDelete');
});