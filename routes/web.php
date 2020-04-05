<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//*** Customer Route start ***

Route::get('/customer/create',[

		'uses' => 'customercontroller@create',
		'as' => 'customer.create'

]);
Route::get('/customer',[

		'uses' => 'customercontroller@index',
		'as' => 'customer'

]);

Route::post('/customer/store',[
	'uses' => 'customercontroller@store',
	'as' => 'customer.store'
]);

Route::get('customer/edit/{id}',[
	'uses' => 'customercontroller@edit',
	'as' => 'customer.edit'
]);

Route::get('customer/delete/{id}',[
	'uses' => 'customercontroller@destroy',
	'as' => 'customer.delete'
]);

Route::post('customer/update/{id}',[
	'uses' => 'customercontroller@update',
	'as' => 'customer.update'
]);

// **** Customer Route End ****


// *** Ledger Route Start ***

Route::get('ledger',[
	'uses' => 'ledgercontroller@index',
	'as' => 'ledger'
]);

Route::post('ledger/search',[
	'uses' => 'ledgercontroller@search',
	'as' => 'ledger.search'
]);

Route::get('ledger/details/{id}',[
	'uses' => 'ledgercontroller@show',
	'as' => 'ledger.details'
]);

Route::post('ledger/store',[
	'uses' => 'ledgercontroller@store',
	'as' => 'ledger.store'
]);

// **** Ledger Route End ****

// **** Profile Route Start ****
Route::get('user/profile',[
	'uses' => 'Auth\profilecontroller@index',
	'as' => 'user.profile'
]);

Route::post('user/profile',[
	'uses' => 'Auth\profilecontroller@store',
	'as' => 'profile.store'
]);

// **** Profile Route End ****

// **** Report Route Start ****

Route::get('report',[
	'uses' => 'reportcontroller@index',
	'as' => 'report'
]);

Route::post('report/search',[
	'uses' => 'reportcontroller@search',
	'as' => 'report.search'
]);

Route::get('report/pdf/{id}/{date_to}/{date_from}',[
	'uses' => 'reportcontroller@pdf',
	'as' => 'report.pdf'
]);

// **** Report Route End ****