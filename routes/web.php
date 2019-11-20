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
	Route::get('/home',function(){
		return view('admin.index');
	});
});

//Rutas a las que puede accesar el usuario
Route::group([
	'middleware' => 'user',
	'prefix' => 'pacientes',
	
],function(){
	Route::get('/home', function () {
    	return view('user.index');
	});
	Route::get('/historiamedica', function(){
		return view('user.historiaMedica');

	});
});
