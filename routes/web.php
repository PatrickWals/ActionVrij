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

Route::get('/', 'PagesController@index');
Route::get('/help', 'PagesController@help');
Route::get('/services', 'PagesController@services');

Route::resource('vrijbrief','VrijbriefsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');