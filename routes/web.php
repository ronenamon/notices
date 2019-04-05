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

Route::get('/',"Main@index");

//login
Route::get('/login', "User@login");
Route::post('/login', "User@login_proccess");


Route::get('/firebase',"FirebaseController@connection");