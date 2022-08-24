<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Subcategory;
use App\Category;
use Illuminate\Support\Facades\DB;

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
    return view('index');
});
Route::get('/products',function(){
    $product = Product::paginate(20);
    $subcat = Subcategory::all();
    $cat = Category::all();
    return  view('/products',compact('product','subcat','cat'));
});


Route::get('admin/dashboard','AdminController@index')->name('admin');
Route::get('admin/profile','AdminController@getProfile')->name('admin.profile');
Route::get('admin/posts','AdminController@getPost');
Route::get('admin/products','AdminController@getProduct');
Route::get('admin/sales-history','AdminController@getSalesHistory')->name('admin.sales');

Route::get('/admin/categories','AdminController@getCategory');
Route::get('/admin/sub-categories','AdminController@getSubCategory')->name('admin.sub-category');
Route::get('/admin/orders','AdminController@getOrder')->name('admin.orders');
Route::get('/admin/customers','AdminController@getCustomer');
Route::post('/admin/profile','AdminController@postProfile')->name('edit.profile');





Route::get('user/dashboard','UserController@index')->name('user');
Route::get('user/profile','UserController@getProfile')->name('user.profile');
Route::post('user/profile','UserController@postProfile')->name('user.edit');
Route::get('user/orders','UserController@getOrder')->name('user.orders');
Route::get('user/post','UserController@getPost')->name('user.posts');

Route::get('paginate',function(){
    return view('vendor.pagination.simple-default');
});



Route::get('/admin/products','ProductController@index')->name('product.index');
Route::get('/admin/products/add-product','ProductController@create')->name('product.create');
Route::get('/admin/products/edit-product/{id}','ProductController@edit');
Route::post('store','ProductController@store')->name('product.store');
Route::put('update/{id}','ProductController@update')->name('product.update');
Route::get('delete/{id}','ProductController@destroy');
Route::get('get_cause_against_category','ProductController@get_cause_against_category');


Route::post('catalog','ProductController@cataog');

Route::get('/admin/categories','CategoryController@index')->name('category.index');
Route::get('/admin/categories/add-category','CategoryController@create')->name('category.create');
Route::get('/admin/categories/edit-category/{id}','CategoryController@edit');
Route::post('store-category','CategoryController@store')->name('category.store');
Route::put('update-category/{id}','CategoryController@update');
Route::get('delete/{id}','CategoryController@destroy');


Route::get('/admin/subcategories','SubCategoryController@index')->name('subcategory.index');
Route::get('/admin/subcategories/add-subcategory','SubCategoryController@create')->name('subcategory.create');
Route::get('/admin/subcategories/edit-subcategory/{id}','SubCategoryController@edit');
Route::post('store-subcategory','SubCategoryController@store')->name('subcategory.store');
Route::put('update-subcategory/{id}','SubCategoryController@update');
Route::get('delete/{id}','SubCategoryController@destroy');

Route::get('/cart',function(){
    return view('cart');
});
Route::get('/nca-forgot_password',function(){
    return view('authentication.nca-forgot_password');
});

Route::get('/contact','ContactMessageController@create');
Route::post('/contact','ContactMessageController@store');

Route::get('print','ProductController@pdf');

Route::get('login/{social}', 'Auth\LoginController@redirectToProvider')->where('social','twitter|facebook|linkedin|google');
Route::get('login/{social}/callback', 'Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google');
Route::get('home','HomeController@index')->name('home');
Auth::routes();

Route::get('/viewPrint','PrintController@index');
Route::get('/printPreview','PrintController@printPreview');