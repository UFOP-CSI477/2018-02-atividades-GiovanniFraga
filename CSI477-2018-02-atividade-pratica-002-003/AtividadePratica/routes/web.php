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
Route::get('cliente', function () {
    return view('cliente');
});

Route::get('carrinho', function () {
    return view('carrinho');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('compras', function () {
    return view('compras');
});
Route::get('adiministrador', function () {
    return view('adiministrador');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
