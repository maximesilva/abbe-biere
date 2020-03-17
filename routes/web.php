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


Route::get('/', 'HomeController@show');

Route::get('/product/{product}','ProductController@show');

Route::get('/categories/{category}','CategoriesController@show');

Route::get('cart','CartController@show');

Route::get('/admin/product','ProductController@create');

Route::post('/admin/product','ProductController@store');
