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
/*
Route::get('/home', function () {
return view('home');
})->name('home');

/*
Route::get('/logout', function () {
return redirect('/login');
});*/
Auth::routes();

Route::get('/AuthUser', 'HomeController@index')->name('AuthUser');

Route::get('/admin', 'DashboardController@admin');

Route::get('/admin/table', 'DashboardController@table');



Route::post('admin/reg', 'DashboardController@register')->name('reg');

Route::get('/admin/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/admin/user', function () {
    return view('user');
});

Route::post('/admin/table', function () {
    return view('table');
});

Route::get('/admin/icons', function () {
    return view('icons');
});
Route::get('/reg', function () {
    return view('auth.register');
});

Route::get('/salesRep{name}', 'SalesRepController@index');

Route::get('/stock_keeper{name}', 'stockController@index');

/*
Route::get('/stockkeeper', function () {
return view('stock_keeper/stock_keeper_profile');
});
 */

Route::get("/salesRep/Profile", 'SalesRepController@profile')->name('srprofile');

Route::get('/salesRep/Sale', 'SalesRepController@addSale')->name('srsale');

Route::get("/stockKeeper/Profile", 'stockController@profile')->name('skprofile');

Route::get('/stockKeeper/addStock', 'stockController@addStock')->name('stockadd');

Route::get('/stockKeeper/viewStock', 'stockRepController@viewStock')->name('stockview');

/*Route::get('/salesRep{name}', function () {
return view('sales_rep.salesrep');
});

Route::get('/salesRep{name}', function () {
return view('sales_rep.salesrep');
});*/

//Route::post('/addSale', 'SalesRepController@addSale')->name('addSale');

Route::post('/salesrep/update', 'SalesRepController@store')->name('stockupdate');

Route::get('/stockkeeper', 'stockController@index');
/*
Route::resource('stock', 'stockController');

Route::get('/add_stock', function () {

    return view('stock_keeper.add_stock');
});

return view('stockkeeper/add_stock');
});
 */

