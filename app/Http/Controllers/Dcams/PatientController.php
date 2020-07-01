<?php

namespace App\Http\Controllers\Dcams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class PatientController extends Controller
{
    public function index(){
      $patients = \App\User::where('typeOfUser','U')->where('userStatus','Active')->get();
      
    	return view('admin.pacientes',[
    		"patients" => $patients
    	]);
    }

    /** 
     * @param Request $request
     * @return array
     */
    public function searchPatient(Request $request, User $user){
    	return $user::where('fullName', 'like', $request['patient'].'%')->where('typeOfUser','=','U')->where('userStatus','Active')->get();
    }

    /** 
     * @param Request $request
     * @return array
     */
    public function showPatients(Request $request, User $user){
    	return $user::where('typeOfUser','U')->where('userStatus','Active')->where('userStatus','Active')->get();
    }

    /** 
     * @param Request $request
     * @return int|array
     */
    public function deletePatient(Request $request){

      $patient = \App\User::find($request['patient']);
      $patient->userStatus = 'Eliminado';
      $patient->save();

      return $patient->id;

    }
}
