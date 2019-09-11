<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|   ZASEBNI PROBNE RUTE KOJE SE KORISTE
*/

Route::get('/', 'HomeController@welcome');
Route::get('/product/{id}', ['uses' => 'HomeController@singleProduct'])->name('product.single');
Route::post('/cart/add', ['uses' => 'shoppingController@add_to_cart'])->name('cart.add');
Route::get('/cart', ['uses' => 'shoppingController@cart'])->name('cart');

/*
|--------------------------------------------------------------------------
|  CHECKOUT CONTROLLER
|--------------------------------------------------------------------------
*/
 Route::get('cart/checkout', 'CheckoutController@index')->name('cart.checkout');

/*
|--------------------------------------------------------------------------
| AUTH HOME CONTROLLER
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', 'HomeController@userDemo')->name('user');
    Route::get('/useraccess', 'HomeController@userAccess')->name('noaccess');
    Route::get('/shop', 'HomeController@shopDemo')->name('shop');
    Route::get('/welcome', ['uses' => 'HomeController@welcome'])->name('welcome');

    /*
 |--------------------------------------------------------------------------
 | SHOPPING CONTROLLER
 |--------------------------------------------------------------------------
 |
 |
 |
 */
    Route::get('/cart/delete/{id}', 'shoppingController@cart_delete')->name('cart.delete');
    Route::get('/cart/rapid/add/{id}', 'shoppingController@rapid_add')->name('cart.rapid.add');
    Route::get('/cart/incr/{id}/{qty}', 'shoppingController@incr')->name('cart.incr');
    Route::get('/cart/decr/{id}/{qty}', 'shoppingController@decr')->name('cart.decr');

    /*
    |--------------------------------------------------------------------------
    | ADMIN HOME CONTROLLER
    |--------------------------------------------------------------------------
    |
    |
    |
    */

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/admin', 'HomeController@adminDemo')->name('admin');

        Route::resource('products', 'ProductsController');
        Route::get('image', 'ImageController@index')->name('image');
        Route::resource('image', 'ImageController');
    });
});

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| RUTE KOJE SE NE KORISTE A MOZDA BUDU OD KORISTI NEKADA...
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

// Route::get('/products/index', 'ProductsController@index')->name('index');
// Route::get('/products/create', 'ProductsController@create')->name('create');
// Route::get('/product/{id}', 'HomeController@singleProduct')->name('product.single');
// Route::get('/user', 'DemoController@userDemo')->name('user');
// Route::get('/admin', 'DemoController@adminDemo')->name('admin');
*/
