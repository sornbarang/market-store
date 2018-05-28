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

Route::group([
        'prefix'     => config('base.route_prefix', 'admin'),
        'namespace'  => 'Admin',
    ], function(){
    Route::get('/', 'HomeController@index')->name('admin');
    Route::resource('ads', 'AdsController',['names' =>
        [
            'index' => 'admin.ads.index',
            'create' => 'admin.ads.create',
            'update' => 'admin.ads.update',
            'edit' => 'admin.ads.edit',
            'store' => 'admin.ads.store',
            'show' => 'admin.ads.show',
            'destroy' => 'admin.ads.destroy',
        ]
    ]);
    Route::resource('product', 'ProductController',['names' =>
        [
            'index' => 'admin.product.index',
            'create' => 'admin.product.create',
            'update' => 'admin.product.update',
            'edit' => 'admin.product.edit',
            'store' => 'admin.product.store',
            'show' => 'admin.product.show',
            'destroy' => 'admin.product.destroy',
        ]
    ]);
    Route::post('deletemedia/{id}', 'ProductController@deleteMedia');
    Route::resource('user', 'UserController',['names' =>
        [
            'index' => 'admin.user.index',
            'create' => 'admin.user.create',
            'update' => 'admin.user.update',
            'edit' => 'admin.user.edit',
            'store' => 'admin.user.store',
            'show' => 'admin.user.show',
            'destroy' => 'admin.user.destroy',
         ]
    ]);
    Route::resource('role', 'RoleController',['names' =>
        [
            'index' => 'admin.role.index',
            'create' => 'admin.role.create',
            'update' => 'admin.role.update',
            'edit' => 'admin.role.edit',
            'store' => 'admin.role.store',
            'show' => 'admin.role.show',
            'destroy' => 'admin.role.destroy',
        ]
    ]);
    Route::resource('permission', 'PermissionController',['names' =>
        [
            'index' => 'admin.permission.index',
            'create' => 'admin.permission.create',
            'update' => 'admin.permission.update',
            'edit' => 'admin.permission.edit',
            'store' => 'admin.permission.store',
            'show' => 'admin.permission.show',
            'destroy' => 'admin.permission.destroy',
        ]
    ]);
});

Auth::routes();