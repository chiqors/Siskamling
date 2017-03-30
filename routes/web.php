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

// cara manual
/*Route::get('/belajar', function () {
    //cara 1
    //$nama = "Chiqo"; // without it, will be removed
    //return view('hello', compact('nama'));
    
    //cara 2
    $data['nama'] = "Chiqo"; // if u want nothing data, here : $data[];
    return view('hello')->with($data);
});*/

// cara method ke controller fungsi
Route::get('/pos', 'PosController@index');
Route::get('/pos/add', 'PosController@create');
Route::post('/pos/add', 'PosController@store');

Route::get('/pos/{id}/edit', 'PosController@edit');
Route::patch('/pos/{id}/edit', 'PosController@update');
Auth::routes();

Route::get('/home', 'HomeController@index');
