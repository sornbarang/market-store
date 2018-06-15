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

/*
$lang = Request::getPreferredLanguage([ 'en', 'km']);
if (App::environment() == 'local') {
    $lang = 'en';
}

App::setLocale($lang);
*/

Route::get('/', function () {
    return view('page');
})->name(trans('routes.home'));

Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function()
{
    // OAuth Routes
    Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider')->name('socialite.auth');
    Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback')->name('socialite.callback');

    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::group([
        'prefix'    => 'market'
    ], function(){
        Route::get('/', ['as' => 'market', 'uses' => 'C2cController@index']);
        Route::get('categories', ['as' => 'market.categories', 'uses' =>'C2cController@getcategory']);
        Route::get('products', ['as' => 'market.categories', 'uses' => 'Market\ProductController@getproduct']);
        Route::get('productdetail', ['as' => 'market.productdetail', 'uses' => 'Market\ProductController@getproductdetail']);
        Route::post('reportmarket', ['as' => 'market.reportmarket', 'uses' => 'Market\ProductController@makeReport']); 
        Route::get('mystore', ['as' => 'market.mystore', 'uses' => 'CustomerController@myStore']);
        Route::get('mysetting', ['as' => 'market.mysetting', 'uses' => 'CustomerController@mySetting']);
        Route::get('myprofile', ['as' => 'market.myprofile', 'uses' => 'CustomerController@myProfile']);
        Route::get('mycart', ['as' => 'market.mycart', 'uses' => 'CustomerController@myCart']);
        Route::get('myfavorite', ['as' => 'market.myfavorite', 'uses' => 'CustomerController@myFavorite']);
        Route::get('mysale', ['as' => 'market.mysale', 'uses' => 'CustomerController@mySaleManagement']);
        Route::any('myitemupload', ['as' => 'market.myitemupload', 'uses' => 'CustomerController@myItemUpload']);
        Route::get('mymanageitem', ['as' => 'market.mymanageitem', 'uses' => 'CustomerController@myManageItem']);
        Route::get('myEditItem', ['as' => 'market.edititem', 'uses' => 'CustomerController@myEditItem']);
        Route::get('myInvoice', ['as' => 'market.invoice', 'uses' => 'CustomerController@myInvoice']);
        Route::get('viewPdf', ['as' => 'market.viewpdf', 'uses' => 'CustomerController@viewPdf']);
        Route::get('downloadPdf', ['as' => 'market.downloadpdf', 'uses' => 'CustomerController@downloadPdf']);

        Route::resource('customer', 'CustomerController',['names' =>
            [
                'index' => 'market.customer.index',
                'create' => 'market.customer.create',
                'update' => 'market.customer.update',
                'edit' => 'market.customer.edit',
                'store' => 'market.customer.store',
                'show' => 'market.customer.show',
                'destroy' => 'market.customer.destroy',
            ]
        ]);
        
    });

    Route::get('contact', 'PageController@contact')->name('contact');
    Route::get('termcondiction', 'PageController@termcondiction')->name('termcondiction');
    // OAuth Routes
    Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider')->name('socialite.auth');
    Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback')->name('socialite.callback');

    Auth::routes();

    Route::group([
        'prefix'     => config('base.route_prefix', 'admin'),
        'namespace'  => 'Admin',
        'middleware' => ['auth']
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

        /***
         * Remove media
         */
        Route::post('deletemedia/{id}', 'ProductController@deleteMedia');
        Route::post('publish/{id}', 'ProductController@publish');
        
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
        Route::resource('category-ads', 'CategoryAdsController',['names' =>
            [
                'index' => 'admin.category-ads.index',
                'create' => 'admin.category-ads.create',
                'update' => 'admin.category-ads.update',
                'edit' => 'admin.category-ads.edit',
                'store' => 'admin.category-ads.store',
                'show' => 'admin.category-ads.show',
                'destroy' => 'admin.category-ads.destroy',
            ]
        ]);
        Route::resource('country', 'CountryController',['names' =>
            [
                'index' => 'admin.country.index',
                'create' => 'admin.country.create',
                'update' => 'admin.country.update',
                'edit' => 'admin.country.edit',
                'store' => 'admin.country.store',
                'show' => 'admin.country.show',
                'destroy' => 'admin.country.destroy',
            ]
        ]);
        Route::resource('state', 'StateController',['names' =>
            [
                'index' => 'admin.state.index',
                'create' => 'admin.state.create',
                'update' => 'admin.state.update',
                'edit' => 'admin.state.edit',
                'store' => 'admin.state.store',
                'show' => 'admin.state.show',
                'destroy' => 'admin.state.destroy',
            ]
        ]);
        Route::resource('city', 'CityController',['names' =>
            [
                'index' => 'admin.city.index',
                'create' => 'admin.city.create',
                'update' => 'admin.city.update',
                'edit' => 'admin.city.edit',
                'store' => 'admin.city.store',
                'show' => 'admin.city.show',
                'destroy' => 'admin.city.destroy',
            ]
        ]);
    });

});

//Route::group(['prefix' => 'admin',  'middleware' => Admin::class], function(){



