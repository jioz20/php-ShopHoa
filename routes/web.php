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

Route::get('/help', 'PageController@getHelp');
Route::get('/', 'PageController@getHome');
Route::get('/User', 'PageController@getUserList');
Route::get('/UserAdd', 'PageController@getUserAdd');
