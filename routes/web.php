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

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/wetStock', function () {
    return view('wet_stock.WetStock');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/dashboard', 'DashboardController@index')->name('admin.dashboard');

Route::get('/wet_stock/WetStock', 'WetStockController@index')->name('wet_stock.WetStock');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('auth.login');

Route::post('/values/store', 'WetStockController@store')->name('values.store');

Route::get('/daily_sales/DailySales', 'DailySalesController@index')->name('daily_sales.DailySales');

Route::post('/silver/store', 'DailySalesController@store')->name('silver.store');

Route::get('/admin/DailySalesRecords', 'DailySalesRecordsController@index')->name('admin.DailySalesRecords');

Route::get('/pricing/Price', 'PriceController@index')->name('pricing.Price');

Route::post('/price/store', 'PriceController@store')->name('price.store');

Route::get('/admin/PriceList', 'PriceListController@index')->name('admin.PriceList');

Route::post('/prices/destroy', 'PriceListController@destroy')->name('price.destroy');
