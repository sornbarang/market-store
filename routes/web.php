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
    return view('page');
});

Route::prefix('c2c')->group(function () {
    // Route::get('/', function () {
    //     return view('c2c/page/index'); 
    // });
    Route::get('/', 'C2cController@index')->name('home');

    Route::prefix('temp')->group(function () {
        Route::get('/categories', 'C2cController@getcategory')->name('category');
        Route::get('/product', 'C2cController@getproduct')->name('product');
        Route::get('/productdetail', 'C2cController@getproductdetail')->name('product');
        Route::get('/store', 'CustomerController@getuserstore')->name('store');
        Route::resource('customer', 'CustomerController');
        Route::get('signup', 'CustomerController@signup');

    });
});


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
