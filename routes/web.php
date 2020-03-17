<?php

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


Route::get('/', 'HomeController@show')->name('home');

Route::name('product.')->group(function () {
    Route::get('/product/{product}', 'ProductController@show')->name('show');
});

Route::name('categories.')->group(function(){
    Route::get('/categories/{category}','CategoriesController@show')->name('show');
});

Route::get('cart','CartController@show')->name('cart');

Route::name('admin.')->prefix('/admin/')->group(function () {
    Route::get('product', 'ProductController@create')->name('product.create');
    Route::post('product', 'ProductController@store')->name('product.store');
});
