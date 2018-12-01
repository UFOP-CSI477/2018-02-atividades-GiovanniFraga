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
Route::get('geral', function () {
    return view('geral');
});

Route::get('inserirEquipamentos', function () {
    return view('inserirEquipamentos');
});
Route::post('inserirEquipamentosBd', 'EquipamentosController@store');


Route::get('inserirRegistros', function () {
    return view('inserirRegistros');
});
Route::post('inserirRegistrosBd', 'RegistrosController@store');


Route::get('registro/index', 'RegistrosController@index');
Route::get('equipamento/index', 'EquipamentosController@index');
