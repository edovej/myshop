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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/user', 'DemoController@userDemo')->name('user');
// Route::get('/admin', 'DemoController@adminDemo')->name('admin');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', 'HomeController@userDemo')->name('user');
    Route::get('/useraccess', 'HomeController@userAccess')->name('noaccess');

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/admin', 'HomeController@adminDemo')->name('admin');
        // Route::get('/products/index', 'ProductsController@index')->name('index');
        // Route::get('/products/create', 'ProductsController@create')->name('create');
        Route::resource('products', 'ProductsController');
        Route::resource('image', 'ImageController');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
