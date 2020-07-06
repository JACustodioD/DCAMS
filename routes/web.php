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
Route::post('/cita','Dcams\PetitionController@store');
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

	
	Route::get('/','Dcams\PetitionController@index');
	Route::post('/peticionvista','Dcams\PetitionController@update');
	Route::post('/borrarpeticion','Dcams\PetitionController@delete');


	Route::get('/tratamientos/{patient}','Dcams\TreatmentController@showTreatments' );


	Route::post('/servicio','Dcams\TreatmentController@getServiceValues');
	Route::post('/agregartratamiento','Dcams\TreatmentController@addTreatment');

	Route::get('/historialmedico/{patient}','Dcams\HistoryController@index');
	Route::post('/habilitarhistoria','Dcams\HistoryController@enabled');

	
	Route::get('/pacientes','Dcams\PatientController@index');
	Route::post('/buscarpaciente','Dcams\PatientController@searchPatient');
	Route::post('/mostrarpaciente','Dcams\PatientController@showPatients');
	Route::post('/borrarpaciente','Dcams\PatientController@deletePatient');

	Route::get('/citas/{patient}','Dcams\DateController@citasUser');
	Route::get('/miscitas', 'Dcams\DateController@show');
	Route::post('/agregarcita','Dcams\DateController@store');
	Route::post('/cancelarcita','Dcams\DateController@cancelarCita');


	Route::post('/buscarcitas','Dcams\DateController@buscarCitas');
	Route::post('/mostrarcitas','Dcams\DateController@mostrarCitas');

	Route::post('/cancelartratamiento','Dcams\TreatmentController@cancelTreatment');

	Route::post('/hacerpago','Dcams\PaymentController@addPayment');
	Route::post('/historialpagos','Dcams\PaymentController@paymentHistory');


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
