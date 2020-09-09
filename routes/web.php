<?php


//Rutas generales que no necesitan acceso
Route::get('/','HomeController@index');
Route::get('/tratamientos','HomeController@tratamientos');
Route::get('/citas','HomeController@citas');
Route::post('/cita','Petition\PetitionController@add_petition');
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

	
	Route::get('/','Petition\PetitionController@show_petitions');
	Route::post('/peticionvista','Petition\PetitionController@petition_status');
	Route::post('/borrarpeticion','Petition\PetitionController@delete_petition');


	Route::get('/tratamientos/{patient}','Treatment\TreatmentController@show_treatments' );


	Route::post('/servicio','Treatment\TreatmentController@service_values');
	Route::post('/agregartratamiento','Treatment\TreatmentController@assign_treatment');
	Route::post('/cancelartratamiento','Treatment\TreatmentController@cancel_treatment');

	Route::get('/historialmedico/{patient}','History\HistoryController@patient_history_admin');
	Route::post('/habilitarhistoria','History\HistoryController@enabled');

	
	Route::get('/pacientes','Patient\PatientController@show_patients');
	Route::post('/buscarpaciente','Patient\PatientController@search_patient');
	Route::post('/mostrarpaciente','Patient\PatientController@get_patients');
	Route::post('/borrarpaciente','Patient\PatientController@delete_patient');

	Route::get('/citas/{patient}','Appointment\AppointmentController@citasUser');
	Route::get('/miscitas', 'Appointment\AppointmentController@show_appointment');
	Route::post('/agregarcita','Appointment\AppointmentController@add_appointment');
	Route::post('/cancelarcita','Appointment\AppointmentController@cancel_appointment');


	Route::post('/buscarcitas','Appointment\AppointmentController@search_appointment');
	Route::post('/mostrarcitas','Appointment\AppointmentController@show_appointment');

	Route::post('/hacerpago','Payment\PaymentController@add_payment');
	Route::post('/historialpagos','Payment\PaymentController@payment_history');


});

//Rutas a las que puede accesar el usuario
Route::group([
	'middleware' => 'user',
	'prefix' => 'pacientes',

],function(){
	Route::get('/','Patient\PatientController@show_patient');

	Route::post('/image','Patient\StorageController@save');

	Route::get('/historiamedica','History\HistoryController@patient_history_user');
	Route::post('/historiamedica','History\HistoryController@add_history');

	Route::get('/historialdepagos','Payment\PaymentController@show_payment');
	Route::post('/historialdepagos','Payment\PaymentController@payment_history');

});
 