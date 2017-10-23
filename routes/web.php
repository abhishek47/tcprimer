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



Route::get('/vehicles', 'VehiclesController@index')->name('vehicles');
Route::post('/vehicles', 'VehiclesController@store')->name('vehicles.store');

Route::get('/vehicles/{vehicle}', 'VehiclesController@show')->name('vehicles.show');
Route::get('/vehicles/{vehicle}/map', 'VehiclesController@map')->name('vehicles.show.map');
Route::patch('/vehicles/{vehicle}', 'VehiclesController@update')->name('vehicles.update');


Route::get('/vehicles/{vehicle}/documents', 'DocumentsController@index')->name('vehicle.documents');
Route::post('/vehicles/{vehicle}/documents', 'DocumentsController@store')->name('vehicle.documents.store');
Route::get('/documents/{document}/delete', 'DocumentsController@destroy')->name('vehicle.documents.delete');


Route::get('/vehicles/{vehicle}/reports/speed', 'ReportsController@speed')->name('vehicle.reports.speed');
Route::get('/vehicles/{vehicle}/reports/fuel', 'ReportsController@fuel')->name('vehicle.reports.fuel');


Route::get('/customers', 'CustomersController@index')->name('customers');


Route::get('/people', 'PeopleController@index')->name('people');


Route::get('/consignments', 'ConsignmentsController@index')->name('consignments');


Route::get('/sales', 'SalesController@index')->name('sales');

Route::get('/expenses', 'ExpensesController@index')->name('expenses');