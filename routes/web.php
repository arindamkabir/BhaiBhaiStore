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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
// Route::get('/admin/orders', 'AdminController@orders')->name('admin.orders')->middleware('isAdmin');
// Route::get('/admin/appointments', 'AdminController@appointments')->name('admin.appointments')->middleware('isAdmin');
// Route::get('/admin/medicines','AdminController@medicines')->name('admin.medicines')->middleware('isAdmin');
// Route::get('/admin/doctors','AdminController@doctors')->name('admin.doctors')->middleware('isAdmin');


// Route::post('/admin/appointments', 'AppointmentController@approve')->name('appointment.approve')->middleware('isAdmin');