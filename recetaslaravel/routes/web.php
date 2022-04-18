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

Route::get('/', 'App\Http\Controllers\InicioReceta@index')->name('inicio.index');
Route::get('/recetas','App\Http\Controllers\RecetaController@index')->name('recetas.index');
Route::get('/recetas/create','App\Http\Controllers\RecetaController@create')->name('recetas.create');
Route::post('/recetas','App\Http\Controllers\RecetaController@store')->name('recetas.store');
Route::get('/recetas/{receta}','App\Http\Controllers\RecetaController@show')->name('recetas.show');
Route::get('/recetas/{receta}/edit','App\Http\Controllers\RecetaController@edit')->name('receta.edit');
Route::put('/recetas/{receta}','App\Http\Controllers\RecetaController@update')->name('receta.update');
Route::delete('/recetas/{receta}','App\Http\Controllers\RecetaController@destroy')->name('receta.destroy');

Route::get('/categorias/{CategoriaReceta}','App\Http\Controllers\CategoriasController@show')->name('categorias.show');

// perfil
Route::get('/perfiles/{perfil}','App\Http\Controllers\PerfilController@show')->name('perfiles.show');
Route::get('/perfiles/{perfil}/edit','App\Http\Controllers\PerfilController@edit')->name('perfiles.edit');
Route::put('/perfiles/{perfil}','App\Http\Controllers\PerfilController@update')->name('perfiles.update');

// buscar receta

Route::get('/buscar','App\Http\Controllers\RecetaController@search')->name('buscar.search');

// dar like
Route::put('/likes/{receta}','App\Http\Controllers\LikesController@update')->name('like.update');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/recetas','App\Http\Controllers\RecetaController');


