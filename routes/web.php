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

Route::get('/hey', function() {
   return view('product');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@ShowLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
    Route::get('', 'AdminController@index');
});

Route::get('/products','Admin\AdminProductController@index')->name('admin.dashboard');

Route::get('/new-product', function () {
    return view('admin.modal.create');
});

Route::post('/create_product', 'Admin\AdminProductController@add_product');

Route::post('/update_product', 'Admin\AdminProductController@update_product');

Route::post('/delete_product', 'Admin\AdminProductController@delete_product');

Route::get('/customers', 'Admin\AdminCustomerController@get_user');

Route::get('/orders', 'Admin\AdminProductController@get_orders');

/* Customers */

Route::get('/shop', 'Customers\ProductsController@index');

Route::post('/buy', 'OrderController@buy_product');

Route::get('/order_review', 'OrderController@order_review');

Route::post('/basket_delete/{id}', 'OrderController@basket_delete');
