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


Route::get('/', 'HomeController@index')->name('home');

Route::name('product.')->prefix('/product/')->group(function () {
    Route::get('{product}', 'ProductController@show')->name('show');
    Route::post('{product}','CartController@addToCart')->name('addtocart');
});

Route::name('categories.')->group(function(){
    Route::get('/categories/{category}','CategoriesController@show')->name('show');
});

Route::get('cart','CartController@show')->name('cart');

Route::name('admin.')->prefix('/admin/')->group(function () {
    Route::get('product', 'ProductController@create')->name('product.create');
    Route::post('product', 'ProductController@store')->name('product.store');
});


