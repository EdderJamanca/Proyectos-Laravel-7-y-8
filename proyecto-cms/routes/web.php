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

Route::view('/data','modulos.data');

Route::put('/data','UsuarioController@update');
Route::get('/usuarios','UsuarioController@index');
Route::get('/crear-usuario','UsuarioController@create');
Route::post('/crear-usuario','UsuarioController@store');
Route::delete('/usuarios/{id}','UsuarioController@destroy');

// slide
Route::get('/slide','SlideController@index');
Route::post('/slide','SlideController@store');
Route::delete('/slide/{id}','SlideController@destroy');
// Categorias
Route::get('/categorias','CategoriaController@index');
Route::post('/categorias','CategoriaController@store');
Route::put('/categoria/{id}','CategoriaController@update');
Route::delete('/ctgDelete/{id}','CategoriaController@destroy');

// excuersiones
Route::get('/excursiones','ExcursionesController@index');
Route::post('/excursione','ExcursionesController@store');
Route::get('/excursion/{id}','ExcursionesController@show');
Route::put('/excursiones/{id}','ExcursionesController@update');
Route::delete('/EliminarEx/{id}','ExcursionesController@destroy');

// galeria

Route::get('/galeria/{id}','GaleriaController@create');
Route::post('/guardar_img','GaleriaController@store');
Route::delete('/delet/{id}','GaleriaController@destroy');


// Fronend
Route::get('/','FronentController@index');
Route::get('/todas_excursiones','FronentController@Excursion');
Route::get('/una_excurson/{id}','FronentController@show');

// mensaje
Route::post('/guardar','FronentController@store');
Route::get('/mensaje','mensajeController@index');
Route::put('/ledido/{id}','mensajeController@update');

// inicio
Route::put('/actualizar/{id}','InicioController@update');