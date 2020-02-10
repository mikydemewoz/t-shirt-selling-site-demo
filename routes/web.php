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

Route::get('/', 'FormController@index');
Route::post('/second_page', 'FormController@admin_second');
Route::get('/jmtadmin', 'FormController@secondpage');
Route::post('/third', 'FormController@thirdpage');
