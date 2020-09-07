<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{

  protected function show_patient(){
    return view('user.index',[
        'dates' => \App\Date::where('user',Auth::user()->id)->orderBy('id','desc')->get()->take(1),
        'treatments' => \App\Treatment::join('services','services.id','=','treatments.service')->where('user',Auth::user()->id)->get(),
        'cont' => 0
    ]);
  }


    public function show_patients(){
      $patients = \App\User::where('typeOfUser','U')->where('userStatus','Active')->get();
      
    	return view('admin.pacientes',[
    		"patients" => $patients
    	]);
    }

    /** 
     * @param Request $request
     * @return array
     */
    public function search_patient(Request $request, User $user){
    	return $user::where('fullName', 'like', $request['patient'].'%')->where('typeOfUser','=','U')->where('userStatus','Active')->get();
    }

    /** 
     * @param Request $request
     * @return array
     */
    public function get_patients(Request $request, User $user){
    	return $user::where('typeOfUser','U')->where('userStatus','Active')->where('userStatus','Active')->get();
    }

    /** 
     * @param Request $request
     * @return int|array
     */
    public function delete_patient(Request $request){

      $patient = \App\User::find($request['patient']);
      $patient->userStatus = 'Eliminado';
      $patient->save();

      return $patient->id;

    }
}
