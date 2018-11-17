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

Route::get('/admin', function () {
    return view('dashboard');
});

Route::get('/admin/user', function () {
    return view('user');
});

Route::get('/admin/table', function () {
    return view('table');
});

Route::get('/admin/icons', function () {
    return view('icons');
});
Route::get('/reg', function () {
    return view('registration');
});
Route::get('/salesRep', function () {
    return view('sales_rep/salesrep');
});