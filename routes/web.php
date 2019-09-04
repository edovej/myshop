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

Route::get('/', 'HomeController@welcome');
Route::get('/product/{id}', ['uses' => 'HomeController@singleProduct'])->name('product.single');
Route::post('/cart/add', ['uses' => 'shoppingController@add_to_cart'])->name('cart.add');
Route::get('/cart', ['uses' => 'shoppingController@cart'])->name('cart');

Auth::routes();

// Route::get('/user', 'DemoController@userDemo')->name('user');
// Route::get('/admin', 'DemoController@adminDemo')->name('admin');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', 'HomeController@userDemo')->name('user');
    Route::get('/useraccess', 'HomeController@userAccess')->name('noaccess');
    Route::get('/shop', 'HomeController@shopDemo')->name('shop');
    Route::get('/welcome', ['uses' => 'HomeController@welcome'])->name('welcome');
    // Route::get('/product/{id}', 'HomeController@singleProduct')->name('product.single');
    Route::get('/cart/delete/{id}', 'shoppingController@cart_delete')->name('cart.delete');
    Route::get('/cart/incr/{id}/{qty}', 'shoppingController@incr')->name('cart.incr');
    Route::get('/cart/decr/{id}/{qty}', 'shoppingController@decr')->name('cart.decr');

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/admin', 'HomeController@adminDemo')->name('admin');

        // Route::get('/products/index', 'ProductsController@index')->name('index');
        // Route::get('/products/create', 'ProductsController@create')->name('create');

        Route::resource('products', 'ProductsController');
        Route::get('image', 'ImageController@index')->name('image');
        Route::resource('image', 'ImageController');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
