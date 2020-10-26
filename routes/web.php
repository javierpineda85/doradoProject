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

Route::redirect('/','inicio');
Route::redirect('/home','/admin/inicio');

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

Route::get('/admin/pacientes/listado-de-pacientes','ProfileKidController@listadoPaciente')->name('showKids');
Route::get('/admin/pacientes/listado-de-pacientesPorApellido', 'ProfileKidController@listarPorApellido')->name('showKidLastname'); //lista todos los usuarios por email
Route::get('/admin/pacientes/evolucionar-paciente-{id}','ProfileKidController@evolucionarPaciente');
Route::get('/admin/pacientes/modificar-paciente-{id?}','ProfileKidController@modificarPaciente')->name('updateKid');
Route::get('/admin/pacientes/nuevo-paciente{id?}','ProfileKidController@nuevoPaciente')->name('newKid');
Route::post('/admin/pacientes/nuevo-paciente','ProfileKidController@store')->name('storeKid');
Route::get('/admin/pacientes/historia-clinica-{id}','ProfileKidController@historiaClinica')->name('history');

/*
|--------------------------------------------------------------------------
|PROFILE PARENT CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/admin/padres/buscar-padre','ProfileParentController@searchPadre')->name('searchPadre');



/*
|--------------------------------------------------------------------------
|PROFILE PROFESIONAL CONTROLLER
|--------------------------------------------------------------------------
*/

Route::get('/admin/profesionales/nuevo-profesional{id?}','ProfileProfController@nuevoProfesional')->name('newProfe');
Route::post('/admin/profesionales/nuevo-profesional','ProfileProfController@store')->name('storeProfe');
Route::get('/admin/profesionales/listado-de-profesionales','ProfileProfController@listado')->name('showProfe');
Route::get('/admin/profesionales/listado-de-profesionalesPorApellido', 'ProfileProfController@listarPorApellido')->name('showProfeLastname');
Route::get('/admin/profesionales/listado-de-profesionalesPorMail', 'ProfileProfController@listarPorMail')->name('showProfeEmail');
Route::get('/admin/profesionales/modificar-profesional-{id?}','ProfileProfController@modificarProfesional')->name('updateProfe');
Route::get('/admin/profesionales/buscar-profesional','ProfileProfController@searchProfe')->name('searchProfe');
Route::get('/admin/profesionales/listado-de-profesionalesPorMail', 'ProfileProfController@listarPorMail')->name('showProfeEmail');
Route::post('/admin/profesionales/modificar-profesional-{id?}','ProfileProfController@update')->name('actializeProfe');
Route::post('/admin/profesionales/eliminar-profesional-{id}','ProfileProfController@delete')->name('deleteProfe');

/*
|--------------------------------------------------------------------------
|USER CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/admin/users/agregar-usuario','UserController@agregarUsuario')->name('newUser');
Route::post('/admin/users/agregar-usuario','UserController@store')->name('storeUser');
Route::get('/admin/users/listado-de-usuarios','UserController@listadoUsuarios')->name('showUser');
Route::get('/admin/users/listado-de-usuariosPorApellido', 'UserController@listarPorApellido')->name('showUserLastname');
Route::get('/admin/users/listado-de-usuariosPorMail', 'UserController@listarPorMail')->name('showUserEmail');
Route::get('/admin/users/modificar-usuario-{id?}','UserController@modificarUsuario')->name('updateUser');
Route::post('/admin/users/modificar-usuario-{id}','UserController@update')->name('actualizeUser');
Route::post('/admin/users/eliminar-usuario-{id}','UserController@delete')->name('deleteUser');
/*
|--------------------------------------------------------------------------
|NOVEDADES CONTROLLER
|--------------------------------------------------------------------------
*/
Route::post('/admin/noticias/agregar-noticia','NovedadeController@store')->name('storeNews');
Route::get('/admin/noticias/crear-novedad','NovedadeController@crearNovedad')->name('News');
Route::post('/admin/noticias/modificar-novedad-{id}','NovedadeController@update')->name('updateNews');
Route::get('/admin/noticias/ver-novedad{id?}','NovedadeController@verNovedad')->name('seeNews');
Route::post('/admin/noticias/borrar-novedad{id?}','NovedadeController@deleteNovedad')->name('deleteNews');
Route::get('/admin/noticias/listado-de-novedades','NovedadeController@listadoNovedades')->name('showNews');
Route::get('/admin/noticias/listado-de-novedadesPorTitulo','NovedadeController@listarPorTituloNovedades')->name('showTitleNews');
/*
|--------------------------------------------------------------------------
|admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/inicio','AdminController@index')->name('dashboard');
//Route::get('/admin/historia-clinica','AdminController@historiaClinica');
//Route::get('/admin/gestion-de-usuarios','AdminController@gestionUsuario');
//Route::get('/admin/listado-de-usuarios','AdminController@listadoUsuario');
//Route::get('/admin/listado-de-pacientes','AdminController@listadoPaciente');
//Route::get('/admin/nuevo-profesional','AdminController@nuevoProfesional');
//Route::get('/admin/evolucionar-paciente','AdminController@evolucionarPaciente');

