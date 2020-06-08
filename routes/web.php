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
    Route::post('{product}', 'CartController@add')->name('addtocart');
});

Route::name('categories.')->group(function () {
    Route::get('/categories/{category}', 'CategoriesController@show')->name('show');
});


Route::name('admin.')->prefix('/admin/')->group(function () {
    Route::get('product', 'ProductController@create')->name('product.create');
    Route::post('product', 'ProductController@store')->name('product.store');
});

Route::name('cart.')->prefix('/cart/')->group(function () {
    Route::get('', 'CartController@show')->name('show');
    Route::get('/create', 'CartController@cartCreate')->name('create');
    Route::post('/add', 'CartController@add')->name('add');
    Route::post('/update', 'CartController@update')->name('update');
    Route::post('/remove', 'CartController@remove')->name('remove');
    Route::post('/clear', 'CartController@clear')->name('clear');
});

Route::name('profil.')->prefix('/profil')->middleware('auth')->group(
    function(){
        Route::get('', 'UserController@show')->name('show');
    }
);


Auth::routes();
//ici je refais une route pour le logout car par défaut c'est un post. Pour que ca marche avec le lien je le fais en get
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

