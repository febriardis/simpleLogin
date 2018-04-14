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
////////////////////Route Login////////////////////////////
Route::get('/login', function () {
    return view('login');
})->middleware('guest');
Route::post('/loginpost', 'LoginController@login');
Route::get('/keluar', 'LoginController@keluar');

//////////////////////Route Register////////////////////////////
Route::get('/register', function () {
    return view('register');
})->middleware('guest');
Route::post('/create', 'RegistController@create');

////////////////PAGE/////////////////////
Route::get('/admin', function(){
	return view('admin');
})->middleware('auth:admin');
Route::get('/peserta', function(){
	return view('peserta');
})->middleware('auth:peserta');