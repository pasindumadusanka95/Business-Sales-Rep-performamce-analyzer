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

Route::get('/admin', 'DashboardController@admin')->middleware('auth:web');

Route::get('/admin/table', 'DashboardController@table')->middleware('auth:web');

Route::get('/admin/chart', 'DashboardController@chart')->middleware('auth:web');

Route::post('admin/reg', 'DashboardController@register')->name('reg');

Route::get('admin/management','DashboardController@management')->name('management');
Route::post('admin/update', 'DashboardController@update')->name('update');

Route::post('admin/delete', 'DashboardController@delete')->name('delete');

Route::get('/admin/registration', function () {
    return view('registration');
})->name('registration')->middleware('auth:web');

Route::get('/admin/manageusers', function () {
    return view('manageusers');
})->name('manageusers')->middleware('auth:web');

Route::get('/admin/deleteusers', function () {
    return view('deleteusers');
})->name('deleteusers')->middleware('auth:web');

Route::get('/admin/user', function () {
    return view('user')->middleware('auth:web');
});

Route::post('/admin/table', function () {
    return view('table')->middleware('auth:web');
});

Route::get('/admin/icons', function () {
    return view('icons')->middleware('auth:web');
});
Route::get('/reg', function () {
    return view('auth.register');
});

Route::get('/update', function () {
    return view('auth.update');
});

Route::get('/salesRep', 'SalesRepController@index')->name('salesRep')->middleware('auth:web');

/*
Route::get('/stockkeeper', function () {
return view('stock_keeper/stock_keeper_profile');
});
 */

Route::get("/salesRep/Profile", 'SalesRepController@profile')->name('srprofile')->middleware('auth:web');

Route::get('/salesRep/Sale', 'SalesRepController@addSale')->name('srsale')->middleware('auth:web');

Route::get('/checkAvailability', 'SalesRepController@checkAvailability');

Route::get("/stockKeeper/Profile", 'stockController@profile')->name('skprofile')->middleware('auth:web');

Route::get('/stockKeeper/addStock', 'stockController@addStock')->name('stockadd')->middleware('auth:web');

Route::get('/stockKeeper/viewStock', 'stockController@viewStock')->name('stockview')->middleware('auth:web');

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

Route::get('mgedit1','managementController@index1')->name('mgedit1');
Route::get('mgedit2','managementController@index2')->name('mgedit2');
Route::get('mgedit3','managementController@index3')->name('mgedit3');

Route::post('/admin/management/mgstore','managementController@store')->name('mgstore');

Route::post('/admin/management/mgsearch','managementController@search')->name('mgsearch');
Route::post('admin/management/addsal','managementController@addsal')->name('addSal');
Route::post('/feedback', 'FeedbackController@sendFeedback')->name('feedback');
