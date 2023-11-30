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


Route::get('dosen', 'DosenController@index');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'DosenController@formulir');
Route::post('/formulir/proses', 'DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');