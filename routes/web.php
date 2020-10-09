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

//Route::get('/','PageController@index')->name('index');
Route::redirect('/','inicio');
Route::get('inicio','Web\PageController@inicio')->name('inicio');

Route::get('/nosotros','Web\PageController@nosotros')->name('nosotros');

Route::get('/contacto','Web\PageController@contacto')->name('contacto');

Route::get('/novedades','Web\PageController@novedades')->name('novedades');


Auth::routes();



/*
|--------------------------------------------------------------------------
|PROFILEKID CONTROLLER
|--------------------------------------------------------------------------
*/

Route::get('/admin/pacientes/listado-de-pacientes','ProfileKidController@listadoPaciente');
Route::get('/admin/pacientes/listado-de-pacientesPorApellido', 'ProfileKidController@listarPorApellido'); //lista todos los usuarios por email
Route::get('/admin/pacientes/evolucionar-paciente-{id}','ProfileKidController@evolucionarPaciente');
Route::get('/admin/pacientes/modificar-paciente-{id}','ProfileKidController@modificarPaciente');
Route::get('/admin/pacientes/nuevo-paciente','ProfileKidController@nuevoPaciente');
Route::get('/admin/pacientes/historia-clinica-{id}','ProfileKidController@historiaClinica');

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
|USER CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/admin/users/agregar-usuario','UserController@agregarUsuario');
Route::get('/admin/users/listado-de-usuarios','UserController@listadoUsuarios');
Route::get('/admin/users/listado-de-usuariosPorApellido', 'UserController@listarPorApellido');
Route::get('/admin/users/listado-de-usuariosPorMail', 'UserController@listarPorMail');
Route::get('/admin/users/modificar-usuario-{id}','UserController@modificarUsuario');

/*
|--------------------------------------------------------------------------
|NOVEDADES CONTROLLER
|--------------------------------------------------------------------------
*/
Route::post('/admin/noticias/agregar-noticia','NovedadeController@store');
Route::get('/admin/noticias/crear-novedad','NovedadeController@crearNovedad');
Route::post('/admin/noticias/crear-novedad','NovedadeController@crearNovedad');
Route::get('/admin/noticias/ver-novedad{id}','NovedadeController@verNovedad');
Route::post('/admin/noticias/borrar-novedad{id}','NovedadeController@deleteNovedad');
Route::get('/admin/noticias/listado-de-novedades','NovedadeController@listadoNovedades');
Route::get('/admin/noticias/listado-de-novedadesPorTitulo','NovedadeController@listarPorTituloNovedades');
/*
|--------------------------------------------------------------------------
|admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/admin','AdminController@index');
//Route::get('/admin/historia-clinica','AdminController@historiaClinica');
//Route::get('/admin/gestion-de-usuarios','AdminController@gestionUsuario');
//Route::get('/admin/listado-de-usuarios','AdminController@listadoUsuario');
//Route::get('/admin/listado-de-pacientes','AdminController@listadoPaciente');
//Route::get('/admin/nuevo-profesional','AdminController@nuevoProfesional');
//Route::get('/admin/evolucionar-paciente','AdminController@evolucionarPaciente');

