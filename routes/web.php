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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

    #### INVOICES MODUEL ####
	Route::get('invoices', 'InvoicesController@index')->name('invoices');
	Route::get('invoices/new', 'InvoicesController@create')->name('invoices.new');
	Route::get('invoices/edit/{id}', 'InvoicesController@edit')->name('invoices.edit');
	Route::put('invoices/update/{id}', 'InvoicesController@update')->name('invoices.update');
	Route::get('invoices/view/{id}', 'InvoicesController@show')->name('invoices.view');
	Route::put('invoices/crm-del/{id}', 'InvoicesController@destroy')->name('invoices.del');
	Route::get('invoices/download/{id}','InvoicesController@downloadPDF')->name('invoices.download');
	Route::get('invoices/search/{search}','InvoicesController@search')->name('invoices.search');

	### INVOICE LINES ###
	Route::put('invoices/ln-update/{id}/{iid}', 'InvoicesLinesController@update')->name('invoices.ln.update');
	Route::get('invoices/ln-net/{id}', 'InvoicesLinesController@create')->name('invoices.ln.new');
	Route::get('invoices/ln-del/{id}', 'InvoicesLinesController@destroy')->name('invoices.ln.del');

	### CONTROLS ###
    Route::get('invoices/controls/{id}', 'InvoicescontrolsController@index')->name('invoices.controls');
    Route::get('invoices/controls/view/{id}', 'InvoicescontrolsController@show')->name('invoices.controls.view');
    Route::get('invoices/controls/setup/{id}', 'InvoicescontrolsController@create')->name('invoices.controls.setup');
    Route::get('invoices/controls/edit/{id}', 'InvoicescontrolsController@edit')->name('invoices.controls.edit');
    Route::put('invoices/controls/update/{id}', 'InvoicescontrolsController@update')->name('invoices.controls.update');

    
