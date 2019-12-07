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
route::get('/index', 'indexController@index');
route::get('user/dashboard', 'dashboardcontroller@index');
Route::resource('customer', 'CustomerController');
route::post('customers', 'indexController@store');
