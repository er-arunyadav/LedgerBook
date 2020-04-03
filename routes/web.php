<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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