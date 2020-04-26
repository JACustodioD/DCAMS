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


//Rutas generales que no necesitan acceso
Route::get('/','HomeController@index');
Route::get('/tratamientos','HomeController@tratamientos');
Route::get('/citas','HomeController@citas');
Route::post('/cita','MessageController@store');
Route::get('/message',function(){
	return view('citas.mensajeCita');
});
Route::get('/test','Patient\HomeController@index');


//Rutas de Autenticacion
Auth::routes();

//Rutas a las que puede accesar el administrador
Route::group([
	'middleware' => 'admin',
	'prefix' => 'consultorio',

],function(){
	Route::get('/home','MessageController@show');
	Route::get('/pacientes','AdminController@showPacientes');
	Route::post('/tratamientos','TreatmentController@adminTratamientos' );
	Route::post('/historialmedico','HistoryController@adminShow');
	Route::post('/habilitarhistoria','HistoryController@habilitar');
	Route::post('/atendido','MessageController@update');
	Route::post('/borrarmensaje','MessageController@destroy');
	Route::post('/buscarusuario','AdminController@buscarPaciente');
	Route::post('/mostrarusuario','AdminController@mostrarTodos');
	Route::post('/borrarpaciente','AdminController@borrarPaciente');
	Route::post('/buscarcitas','DateController@buscarCitas');
	Route::post('/mostrarcitas','DateController@mostrarCitas');
	Route::post('/servicio','ServiceController@show');
	Route::post('/cancelartratamiento','TreatmentController@cancelarTratamiento');
	Route::post('/agregartratamiento','TreatmentController@agregarTratamiento');
	Route::post('/historialdepagos','PaymentController@adminpayments');
	Route::post('/hacerpago','PaymentController@hacerPago');
	Route::post('/citas','DateController@citasUser');
	Route::get('/miscitas', 'DateController@show');
	Route::post('/cancelarcita','DateController@cancelarCita');
	Route::post('/agregarcita','DateController@store');
});

//Rutas a las que puede accesar el usuario
Route::group([
	'middleware' => 'user',
	'prefix' => 'pacientes',

],function(){
	Route::get('/','Patient\HomeController@index');

	Route::post('/image','Patient\StorageController@save');

	Route::get('/historiamedica','Patient\HistoryController@show');
	Route::post('/historiamedica','Patient\HistoryController@store');

	Route::get('/historialdepagos','Patient\PaymentController@show');
	Route::post('/historialdepagos','Patient\PaymentController@payments');

});
