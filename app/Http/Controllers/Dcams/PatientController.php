<?php

namespace App\Http\Controllers\Dcams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class PatientController extends Controller
{
    public function index(){
    	return view('admin.pacientes',[
    		"patients" => \App\User::where('typeOfUser','U')->where('userStatus','Active')->get()
    	]);
    }

    public function searchPatient(Request $request, User $user){
    	return $user::where('fullName', 'like', $request['paciente'].'%')->where('typeOfUser','=','U')->where('userStatus','Active')->get();
    }


    public function showPatients(Request $request, User $user){
    	return $user::where('typeOfUser','U')->where('userStatus','Active')->get();
    }


    public function deletePatient(Request $request, User $user){
        $user = $user->find($request['paciente']);
        $user->UserStatus = "Eliminado";
        $user->save();

        return ($user);
    }
}
