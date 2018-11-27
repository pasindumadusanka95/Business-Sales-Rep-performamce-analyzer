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
    return view('welcome');
})->name('welcome');

/*
Route::get('/logout', function () {
return redirect('/login');
});*/
Auth::routes();

Route::get('/AuthUser', 'HomeController@index')->name('AuthUser');

Route::get('/admin', 'DashboardController@admin');

Route::get('/admin/table', 'DashboardController@table');

Route::get('/admin/chart', 'DashboardController@chart');

Route::post('admin/reg', 'DashboardController@register')->name('reg');

Route::post('admin/update', 'DashboardController@update')->name('update');

Route::post('admin/delete', 'DashboardController@delete')->name('delete');

Route::get('/admin/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/admin/manageusers', function () {
    return view('manageusers');
})->name('manageusers');

Route::get('/admin/deleteusers', function () {
    return view('deleteusers');
})->name('deleteusers');

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

Route::get('/update', function () {
    return view('auth.update');
});

Route::get('/salesRep', 'SalesRepController@index')->name('salesRep');

/*
Route::get('/stockkeeper', function () {
return view('stock_keeper/stock_keeper_profile');
});
 */

Route::get("/salesRep/Profile", 'SalesRepController@profile')->name('srprofile');

Route::get('/salesRep/Sale', 'SalesRepController@addSale')->name('srsale');

Route::get('/checkAvailability', 'SalesRepController@checkAvailability');

Route::get("/stockKeeper/Profile", 'stockController@profile')->name('skprofile');

Route::get('/stockKeeper/addStock', 'stockController@addStock')->name('stockadd');

Route::get('/stockKeeper/viewStock', 'stockController@viewStock')->name('stockview');

/*Route::get('/salesRep{name}', function () {
return view('sales_rep.salesrep');
});

Route::get('/salesRep{name}', function () {
return view('sales_rep.salesrep');
});*/

//Route::post('/addSale', 'SalesRepController@addSale')->name('addSale');

Route::post('/salesrep/update', 'SalesRepController@store')->name('stockupdate');

Route::post('/stockkeeper/submit', 'stockController@store')->name('stockadd');

/*
Route::resource('stock', 'stockController');

Route::get('/add_stock', function () {

return view('stock_keeper.add_stock');
});

return view('stockkeeper/add_stock');
});
 */
Route::get('/findQty', 'SalesRepController@findQty');

Route::post('/feedback', 'FeedbackController@sendFeedback')->name('feedback');