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
Route::get('/','PageController@welcome');
Route::get('action','PageController@action');

Route::get('about','PageController@about');
Route::get('join','PageController@join');
Route::get('news','PageController@news');
Route::get('contact','PageController@contact');

Route::get('customer','PageController@showCustomer');
