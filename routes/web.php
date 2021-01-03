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
//Landing
Route::get('/', 'blogController@index');
Route::get('/form', 'blogController@form');
Route::get('/blogBahari', 'blogController@bahari');
Route::get('/blogCagarAlam', 'blogController@cagarAlam');
Route::get('/blogBudaya', 'blogController@budaya');
Route::get('/blogKonvensi', 'blogController@konvensi');
Route::get('/blogLainnya', 'blogController@lainnya');

//Auth
Route::get('/register', 'AuthController@register');
Route::post('/doRegister', 'AuthController@doRegister')->name('doRegister');
Route::get('/login', 'AuthController@login');
Route::post('/postLogin', 'AuthController@postLogin')->name('postLogin');
Route::get('/logout', 'AuthController@logout');


Auth::routes();

Route::group(['middleware' => ['auth']],function(){
Route::get('/profile', 'AuthController@profile');
Route::get('/ubahprofile', 'AuthController@ubahprofile');
Route::post('/ubahprofile/{id}', 'AuthController@doubahprofile');

});