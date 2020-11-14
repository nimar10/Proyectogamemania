<?php

use Illuminate\Support\Facades\Route;


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


//Ruta inicio


Route::get('/','App\Http\Controllers\HomeController@index')->name('home');
Auth::routes();


// Ruta de los usuarios (Login, registro, mas)
// rutas de los productos electronicos
Route::resource('usuarios', 'App\Http\Controllers\UserController');
Route::get('/perfil', 'App\Http\Controllers\UserController@show')->name('usuarios.show');
Route::resource('consolas', 'App\Http\Controllers\ConsolaController');
Route::resource('videojuegos', 'App\Http\Controllers\VideojuegoController');
Route::resource('accesorios', 'App\Http\Controllers\AccesorioController');
