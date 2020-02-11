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

/**
 * Ruta de los controladores para el dashboard
 */
Route::resource('/', 'DashboardController');


/**
 * Rutas de los pacientes
 * Aquí estan las rutas de las funciones que se pueden realizar con el paciente
 */
Route::resource('/pacientes', 'PacienteController');
Route::post('/pacientes/{paciente}/addEstudio', 'PacienteController@addEstudio')->name('pacientes.addEstudio');
Route::post('pacientes/{paciente}/addFactorRiesgo', 'PacienteController@addFactorRiesgo');

/**
 * Rutas de las jurisdicciones 
 * Aquí estan las rutas de las funciones que se pueden realizar
 */
Route::resource('/jurisdicciones', 'JurisdiccionController');


/**
 * Rutas de las  unidades medicas
 * Aquí estan las rutas de las funciones que se pueden realizar
 */
Route::resource('/unidades-medicas', 'UnidadMedicaController');

/**
 * Rutas de la autenticacion de usuarios y creacion de usuarios
 */
Auth::routes();
Route::get('/logout', function(){
    Auth::logout();
    return view('auth.login');
});

/**
 * Rutas para los select dinamicos
 */
Route::get('getJurisdicciones', 'EstadoController@getJurisdicciones');
Route::get('getMunicipios', 'EstadoController@getMunicipios');
Route::get('getLocalidades', 'EstadoController@getLocalidades');
Route::get('getUnidadesMedicas', 'EstadoController@getUnidadesMedicas');

/**
 * Rutas para la creacion de usuarios, 
 * solo esta disponible para el "Responsable Estatal de Programa"
 */
Route::resource('/usuarios', 'UsuariosController');

Route::get('/welcome', function(){
    return view('landing');
});