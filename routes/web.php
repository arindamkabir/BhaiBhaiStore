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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('home');;

Route::resource('customer', 'CustomerController');
Route::resource('shopowner', 'ShopOwnerController')->middleware('shopowner');
Route::get('/shopowner/products/create', 'ShopOwnerController@productcreate')->name('shopowner.pcreate')->middleware('shopowner');;
Route::post('/shopowner/products/', 'ShopOwnerController@productstore')->name('shopowner.pstore')->middleware('shopowner');;

Route::resource('product', 'ProductController');
Route::resource('deliveryman', 'DeliveryManController');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/customers', 'AdminController@customers')->name('admin.customers');
Route::get('/admin/products', 'AdminController@products')->name('admin.products');
Route::get('/admin/shopowners','AdminController@shopowners')->name('admin.shopowners');
Route::get('/admin/deliverymen','AdminController@deliverymen')->name('admin.deliverymen');

Route::post('/orders/details', 'OrderController@details')->name('order.details');
Route::get('/orders/waiting/{order_id}/{total}', function ($order_id,$total) {

    return view('order.waiting',['order_id'=>$order_id,'total'=>$total]);

})->name('order.pending');
Route::get('/orders/pastorders','OrderController@pastOrders')->name('order.past_orders');
Route::resource('orders', 'OrderController');

Route::resource('cart', 'CartController');
Route::get('/checkout','CartController@checkout')->name('cart.checkout');
Route::get('/cart','CartController@index')->name('cart.index');
Route::get('/cartempty','CartController@empty')->name('cart.empty');

// Route::get('/admin/doctors','AdminController@doctors')->name('admin.doctors')->middleware('isAdmin');


// Route::post('/admin/appointments', 'AppointmentController@approve')->name('appointment.approve')->middleware('isAdmin');