<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Web App Routes
Route::get('/','appController@index');
Route::get('/web/home','appController@index');
Route::get('/web/products','appController@products');
Route::get('/web/bills','appController@bills');
Route::get('/web/customers','appController@customers');

// Mail Routes
Route::get('/mail','ProductsController@mail_list');


// Resource Routes
Route::resource('bills','BillsController');
Route::resource('customers','CustomersController');
Route::resource('products','ProductsController');


