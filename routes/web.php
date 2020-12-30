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

Route::get('/', 'blogController@index');
Route::get('/blogBahari', 'blogController@bahari');
Route::get('/blogCagarAlam', 'blogController@cagarAlam');
Route::get('/blogBudaya', 'blogController@budaya');
Route::get('/blogKonvensi', 'blogController@konvensi');
Route::get('/blogLainnya', 'blogController@lainnya');
