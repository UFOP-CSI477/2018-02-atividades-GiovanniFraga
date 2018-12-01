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

Route::get('/', function () {
    return view('welcome');
});

Route::post('registro/store', 'RegistrosController@store');
Route::post('equipamento/store', 'EquipamentosController@store');
Route::get('registro/index', 'RegistrosController@index');
Route::get('equipamento/index', 'EquipamentosController@index');
