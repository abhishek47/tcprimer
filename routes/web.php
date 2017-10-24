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
Route::post('/customers', 'CustomersController@store')->name('customers.store');
Route::get('/customers/{customer}', 'CustomersController@show')->name('customers.show');
Route::patch('/customers/{customer}', 'CustomersController@update')->name('customers.update');
Route::get('/customers/{customer}/documents', 'CustomerDocumentsController@index')->name('customers.documents');
Route::post('/customers/{customer}/documents', 'CustomerDocumentsController@store')->name('customers.documents.store');
Route::get('customers/documents/{document}/delete', 'CustomerDocumentsController@destroy')->name('customers.documents.delete');


Route::get('/people', 'PeopleController@index')->name('people');
Route::post('/people', 'PeopleController@store')->name('people.store');
Route::get('/people/{person}', 'PeopleController@show')->name('people.show');
Route::patch('/people/{person}', 'PeopleController@update')->name('people.update');
Route::get('/people/{person}/documents', 'PeopleDocumentsController@index')->name('people.documents');
Route::post('/people/{person}/documents', 'PeopleDocumentsController@store')->name('people.documents.store');
Route::get('people/documents/{document}/delete', 'PeopleDocumentsController@destroy')->name('people.documents.delete');


Route::get('/consignments', 'ConsignmentsController@index')->name('consignments');


Route::get('/sales', 'SalesController@index')->name('sales');

Route::get('/expenses', 'ExpensesController@index')->name('expenses');