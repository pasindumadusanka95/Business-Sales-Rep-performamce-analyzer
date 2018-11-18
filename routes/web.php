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
    return redirect('/home');
});

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/logout', function () {
    return redirect('/home');
});
Auth::routes();

Route::get('/AuthUser', 'HomeController@index')->name('AuthUser');

Route::get('/admin', 'DashboardController@admin' );

Route::get('/reg', 'DashboardController@register' );

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
<<<<<<< HEAD


=======
>>>>>>> 844e4b3ae5addfbbdfb1c0b8f59a3cd7d68cc62d
Route::get('/salesRep', function () {
    return view('sales_rep/salesrep');
});

Route::get('/stockkeeper', function () {
    return view('stock_keeper/stock_keeper_profile');
});
<<<<<<< HEAD

Route::get('/salesRep{name}', function () {
    return view('sales_rep.salesrep');

});

Route::get('/stockkeeper{name}', function () {
    return view('stockkeeper.stock_keeper_profile');
});
=======
Route::get('/salesRep{name}', function () {
    return view('sales_rep.salesrep');
});
>>>>>>> 844e4b3ae5addfbbdfb1c0b8f59a3cd7d68cc62d
