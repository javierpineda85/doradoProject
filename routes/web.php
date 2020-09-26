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

Route::get('/','PageController@index')->name('index');

Route::get('/nosotros','PageController@nosotros')->name('nosotros');

Route::get('/contacto','PageController@contacto')->name('contacto');

Auth::routes();



/*
|--------------------------------------------------------------------------
|PROFILEKID CONTROLLER
|--------------------------------------------------------------------------
*/

Route::get('/admin/pacientes/listado-de-pacientes','ProfileKidController@listadoPaciente');
Route::get('/admin/pacientes/listado-de-pacientesPorApellido', 'ProfileKidController@listarPorApellido'); //lista todos los usuarios por email
Route::get('/admin/pacientes/evolucionar-paciente','AdminController@evolucionarPaciente');
Route::get('/admin/pacientes/modificar-paciente-{id}','ProfileKidController@modificarPaciente');

/*
|--------------------------------------------------------------------------
|PROFILE PROFESIONAL CONTROLLER
|--------------------------------------------------------------------------
*/

Route::get('/admin/profesionales/nuevo-profesional','ProfileProfController@nuevoProfesional');
Route::get('/admin/profesionales/listado-de-profesionales','ProfileProfController@listadoProfesionales');
Route::get('/admin/profesionales/listado-de-profesionalesPorApellido', 'ProfileProfController@listarPorApellido');
Route::get('/admin/profesionales/listado-de-profesionalesPorMail', 'ProfileProfController@listarPorMail');
Route::get('/admin/profesionales/modificar-profesional-{id}','ProfileProfController@modificarProfesional');

/*
|--------------------------------------------------------------------------
|admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/admin','AdminController@index');
Route::get('/admin/historia-clinica','AdminController@historiaClinica');
Route::get('/admin/gestion-de-usuarios','AdminController@gestionUsuario');
Route::get('/admin/listado-de-usuarios','AdminController@listadoUsuario');
//Route::get('/admin/listado-de-pacientes','AdminController@listadoPaciente');
//Route::get('/admin/nuevo-profesional','AdminController@nuevoProfesional');
//Route::get('/admin/evolucionar-paciente','AdminController@evolucionarPaciente');

