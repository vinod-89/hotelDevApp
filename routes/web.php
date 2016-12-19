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

Route::get('/','AdminController@getHotelList');

Auth::routes();

//  Route::get('/home', 'AdminController@index');

Route::get('/admin', 'AdminController@viewHotel');

Route::post('/createhotel', 'AdminController@createHotel');
