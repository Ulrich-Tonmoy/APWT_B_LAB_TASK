<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', ['as' => 'login.index', 'uses' => 'LoginController@index']);
Route::post('/login', 'LoginController@verify');
Route::get('/registration', 'RegiController@index');
Route::post('/registration', 'RegiController@verify');
Route::get('/logout', 'LogoutController@index');

Route::group(['middleware' => ['session']], function () {
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('/system/sales', 'SalesController@index')->name('sales.index');
    Route::get('/system/sales/physical_store', 'SalesController@physical_store')->name('sales.physical_store');
    Route::get("/system/sales/physical_store/sales_log", 'SalesController@sales_log');
    Route::post("/system/sales/physical_store/sales_log", 'SalesController@sales_log_store');
});
