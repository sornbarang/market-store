<?php
use App\Http\Middleware\Admin;
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
        Route::get('/mystore', 'CustomerController@myStore')->name('customer'); 
        Route::get('/mysetting', 'CustomerController@mySetting')->name('customer'); 
        Route::get('/myprofile', 'CustomerController@myProfile')->name('customer'); 
        Route::get('/mycart', 'CustomerController@myCart')->name('customer'); 
        Route::get('/myfavorite', 'CustomerController@myFavorite')->name('customer'); 
        Route::get('/mysale', 'CustomerController@mySaleManagement')->name('customer'); 
        Route::get('/myitemupload', 'CustomerController@myItemUpload')->name('customer'); 
        Route::get('/mymanageitem', 'CustomerController@myManageItem')->name('customer'); 
        Route::get('/edititem', 'CustomerController@myEditItem')->name('customer'); 
        Route::resource('customer', 'CustomerController');

    });
});
Route::get('/contact', 'PageController@contact')->name('page');


//Route::group(['prefix' => 'admin',  'middleware' => Admin::class], function(){

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'HomeController@index')->name('admin');
    // Route::get('/ads', 'HomeController@ads')->name('ads');
    Route::resource('ads', 'AdsController');

});

Auth::routes();