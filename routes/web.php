<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/validasi', function () {
    return view('validasi');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/tugaslinktree', function () {
    return view('tugaslinktree');
});

Route::get('/tugasets', function () {
    return view('tugasets');
});

Route::get('/tugasbootstrap', function () {
    return view('tugasbootstrap');
});

Route::get('/bootstrap', function () {
    return view('bootstrap');
});

Route::get('/tugascss', function () {
    return view('tugascss');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/biodata', function () {
    return view('biodata');
});



Route::get('/halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function () {
    return "<h1> halo apa kabarr </h1>";
});


Route::get('dosen', 'App\Http\Controllers\DosenController@index');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

// route nilai
Route::get('/nilai','App\Http\Controllers\NilaiController@data');
Route::get('/nilai/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilai/store','App\Http\Controllers\NilaiController@store');

//route beli
Route::get('/keranjangbelanja','App\Http\Controllers\BelanjaController@index1');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\BelanjaController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\BelanjaController@store');
Route::post('/keranjangbelanja/update','App\Http\Controllers\BelanjaController@update');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\BelanjaController@hapus');
