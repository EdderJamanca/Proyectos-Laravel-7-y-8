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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::view('/', 'welcome');
Route::get('/inicio','InicioController@index');
Route::get('/','FronentController@index');
Route::view('/data','modulos.data');

Route::put('/data','UsuarioController@update');
Route::get('/usuarios','UsuarioController@index');
Route::get('/crear-usuario','UsuarioController@create');
Route::post('/crear-usuario','UsuarioController@store');
Route::delete('/usuarios/{id}','UsuarioController@destroy');

