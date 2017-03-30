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

/* Pos Routes */
Route::get('/pos', 'PosController@index');
Route::get('/pos/add', 'PosController@create');
Route::post('/pos/add', 'PosController@store');

Route::get('/pos/{id}/edit', 'PosController@edit');
Route::patch('/pos/{id}/edit', 'PosController@update');
Route::get('/pos/{id}/delete', 'PosController@destroy');

Route::get('/tugas/{id}/edit', 'TugasController@edit');
Route::patch('/tugas/{id}/edit', 'TugasController@update');
Route::get('/tugas/{id}/delete', 'TugasController@destroy');

/* Jadwal Routes */
Route::get('/jadwal', 'JadwalController@index');
Route::get('/jadwal/add', 'JadwalController@create');
Route::post('/jadwal/add', 'JadwalController@store');

Route::get('/jadwal/{id}/edit', 'JadwalController@edit');
Route::patch('/jadwal/{id}/edit', 'JadwalController@update');
Route::get('/jadwal/{id}/delete', 'JadwalController@destroy');

/* Penjaga Routes */
Route::get('/penjaga', 'PenjagaController@index');
Route::get('/penjaga/add', 'PenjagaController@create');
Route::post('/penjaga/add', 'PenjagaController@store');

Route::get('/penjaga/{id}/edit', 'PenjagaController@edit');
Route::patch('/penjaga/{id}/edit', 'PenjagaController@update');
Route::get('/penjaga/{id}/delete', 'PenjagaController@destroy');

/* Auth Routes */
Auth::routes();
Route::get('/home', 'HomeController@index');
