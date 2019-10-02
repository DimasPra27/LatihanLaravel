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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','PegawaiController@index');

Route::get('/',function(){
    return view('login');
});

Route::get('Test', function(){
    return "Ini Test Route Pertama";
});

Route::get('Coba', function(){
    return view('Coba');
});

Route::get('Binusian','BinusianController@index');

// request(menangkap) data with url
Route::get('Wibu/{nama}','WibuController@index');

//request data with input user
Route::get('formulir','WibuController@formulir');
Route::POST('formulir/proses','WibuController@proses');

// tempalte blade.php
Route::get('/blog','BlogController@Home');
Route::get('/blog/Tentang','BlogController@Tentang');
Route::get('/blog/Kontak','BlogController@Contact');

//get data from dataBase
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/delete/{id}','PegawaiController@delete');

Route::get('/testApi','ApiController@index');
Route::get('/formApi','ApiController@form');
Route::POST('/ApiPost','ApiController@insert');