<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function showPacientes(){
    	return view('admin.pacientes',[
    		"patients" => \App\User::where('typeOfUser','U')->get()
    	]);
    }

    public function buscarPaciente(Request $request, User $user){
    	return $user::where('name', 'like', $request['paciente'].'%')->where('typeOfUser','=','U')->get();
    }
    public function mostrarTodos(Request $request, User $user){
    	return $user::where('typeOfUser','U')->get();
    }
}
