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
    return view('starter');
})->middleware('auth');

Route::get('/logout', function(){
    Auth::logout();
    return view('auth.login');
});


/**
 * Rutas de los pacientes
 * Aquí estan las rutas de las funciones que se pueden realizar con el paciente
 */
Route::resource('/pacientes', 'PacienteController');
Route::post('/pacientes/{paciente}/addEstudio', 'PacienteController@addEstudio')->name('pacientes.addEstudio');

Auth::routes();