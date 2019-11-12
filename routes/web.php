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
Route::get('/', function () {
    return view('index');
});
Route::get('/tratamientos', function () {
    return view('tratamientos.tratamientos');
});
Route::get('/citas', function () {
    return view('citas.crearCita');
});
Route::post('/cita','MessageController@store');

//Rutas de Autenticacion
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
});