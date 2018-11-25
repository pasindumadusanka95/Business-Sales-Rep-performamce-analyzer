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
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/logout', function () {
    return redirect('/welcome');
});
Auth::routes();

Route::get('/AuthUser', 'HomeController@index')->name('AuthUser');

Route::get('/admin', 'DashboardController@admin');

Route::post('admin/reg', 'DashboardController@register')->name('reg');

Route::get('/admin/registration', function () {
    return view('registration');
})->name('registration');

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
    return view('auth.register');
});

Route::get('/salesRep', function () {
    return view('sales_rep/salesrep');
});

Route::get('/stockkeeper', function () {
    return view('stock_keeper/stock_keeper_profile');
});

Route::get('/salesRep{name}', function () {
    return view('sales_rep.salesrep');
});

Route::get('/salesRep{name}', function () {
    return view('sales_rep.salesrep');
});
Route::post('/addSale', 'SalesRepController@addSale')->name('addSale');

Route::get('/stockkeeper{name}', function () {
    return view('stock.stock_keeper_profile');
});
Route::resource('stock', 'stockController');

Route::get('/add_stock', function () {
    return view('stock_keeper.add_stock');
});