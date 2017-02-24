<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/golongan', 'golonganController');
Route::resource('/jabatan', 'jabatanController');
Route::resource('/kategori', 'kategoriController');
Route::resource('/tunjangan', 'tunjanganController');
Route::resource('/pegawai', 'pegawaiController');
Route::resource('/lemburp','lemburpegawaiController');
Route::resource('/gaji','penggajianController');
Route::resource('/tunjanganp', 'tunjanganpController');
Route::get('bulangaji','penggajianController@search');
Route::group(['middleware' => ['api','cors'],'prefix' => 'api'], function () {
    Route::post('register', 'APIController@register');
    Route::post('login', 'APIController@login');
    Route::group(['middleware' => 'jwt-auth'], function () {
    	Route::post('get_user_details', 'APIController@get_user_details');
    });
});



