<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
// Clientes
Route::get('clients', 'ClientController@index');
Route::get('clients/{client}', 'ClientController@show');
Route::post('clients', 'ClientController@store');
Route::put('clients/{client}', 'ClientController@update');
Route::delete('clients/{client}', 'ClientController@delete');
//Contacto
Route::get('contacts', 'ContactController@index');
Route::get('contacts/{contact}', 'ContactController@show');
Route::post('contacts', 'ContactController@store');
Route::put('contacts/{contact}', 'ContactController@update');
Route::delete('contacts/{contact}', 'ContactController@delete');
// Conductor
Route::get('drivers', 'DriverController@index');
Route::get('drivers/{driver}', 'DriverController@show');
Route::post('drivers', 'DriverController@store');
Route::put('drivers/{driver}', 'DriverController@update');
Route::delete('clients/{driver}', 'DriverController@delete');
// Socio
Route::get('partners', 'PartnerController@index');
Route::get('partners/{partner}', 'PartnerController@show');
Route::post('partners', 'PartnerController@store');
Route::put('partners/{partner}', 'PartnerController@update');
Route::delete('partners/{partner}', 'PartnerController@delete');
//Document
Route::get('documents', 'DocumentController@index');
Route::get('documents/{document}', 'DocumentController@show');
Route::post('documents', 'DocumentController@store');
Route::put('documents/{document}', 'DocumentController@update');
Route::delete('documents/{document}', 'DocumentController@delete');
// Entrada al puero
Route::get('enteredThePorts', 'EnteredThePortController@index');
Route::get('enteredThePorts/{enteredThePort}', 'EnteredThePortController@show');
Route::post('enteredThePorts', 'EnteredThePortController@store');
Route::put('enteredThePorts/{enteredThePort}', 'EnteredThePortController@update');
Route::delete('enteredThePorts/{enteredThePort}', 'EnteredThePortController@delete');
//  Facturas
Route::get('invoices', 'InvoiceController@index');
Route::get('invoices/{invoice}', 'InvoiceController@show');
Route::post('invoices', 'InvoiceController@store');
Route::put('invoices/{invoice}', 'InvoiceController@update');
Route::delete('invoices/{invoice}', 'InvoiceController@delete');
// veiculos
Route::get('vihicles', 'VihicleController@index');
Route::get('vihicles/{vihicle}', 'VihicleController@show');
Route::post('vihicles', 'VihicleController@store');
Route::put('vihicles/{vihicle}', 'VihicleController@update');
Route::delete('vihicles/{vihicle}', 'VihicleController@delete');
//imagenes
//Route::get('clients', 'ClientController@index');
//Route::get('clients/{client}', 'ClientController@show');
//Route::post('clients', 'ClientController@store');
//Route::put('clients/{client}', 'ClientController@update');
//Route::delete('clients/{client}', 'ClientController@delete');
//reporte de carga
//Route::get('clients', 'ClientController@index');
//Route::get('clients/{client}', 'ClientController@show');
//Route::post('clients', 'ClientController@store');
//Route::put('clients/{client}', 'ClientController@update');
//Route::delete('clients/{client}', 'ClientController@delete');
