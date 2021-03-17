<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Empleado@index');
Route::get('crear-empleado','Empleado@create');
Route::post('crear-empleado','Empleado@store');
Route::get('edit/{id}','Empleado@edit');
Route::put('update/{id}','Empleado@update');
Route::delete('delete/{id}','Empleado@destroy');
