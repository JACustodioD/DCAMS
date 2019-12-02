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
	Route::get('/historialmedico', function(){
		return view('admin.historialmedico');
	});
	Route::get('/historialdepagos', function(){
		return view('admin.historialdepagos');
	});
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
	Route::get('/citas',function(){
		return view('admin.citas');
	});
	Route::get('/miscitas', 'DateController@show');
});

//Rutas a las que puede accesar el usuario
Route::group([
	'middleware' => 'user',
	'prefix' => 'pacientes',
	
],function(){
	Route::get('/home','TreatmentController@homeUser');
	Route::post('/image','StorageController@save');
	Route::get('/historiamedica','HistoryController@show');
	Route::post('/historiamedica','HistoryController@store');
	Route::get('/historialdepagos','PaymentController@show');
	Route::post('/historialdepagos','PaymentController@payments');

});
