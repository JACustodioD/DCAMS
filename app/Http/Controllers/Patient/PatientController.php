<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{


    /**
     * Muestra datos del paciente, sus tratamiento y última cita
     * @return view
    */
    protected function show_patient(){

        $appointment_info = \App\Date::where('user',Auth::user()->id)->orderBy('id','desc')->get()->take(1);

        foreach ($appointment_info as $appointment)
        {
        $appointment->dateOfAppointment = date('d-m-Y',strtotime($appointment->dateOfAppointment)); 
        }

        $treatments_list = \App\Treatment::join('services','services.id','=','treatments.service')->where('user',Auth::user()->id)->where('treatmentStatus','Active')->get();
        
        foreach($treatments_list as $treatment)
        {
        $treatment->startDate = date('d-m-Y',strtotime($treatment->startDate)); 
        $treatment->endDate = date('d-m-Y',strtotime($treatment->endDate));
        $treatment->total =  number_format($treatment->total, 2, '.', ',');
        }

        return view('user.index',[
            'appointment_info' => $appointment_info,
            'treatments' => $treatments_list,
            'cont' => 0
        ]);
    }


    protected function show_patients(){
      $patients = \App\User::where('typeOfUser','U')->where('userStatus','Active')->get();
      
    	return view('admin.pacientes',[
    		"patients" => $patients
    	]);
    }

    /** 
     * @param Request $request
     * @return array
     */
    protected function search_patient(Request $request, User $user){
    	return $user::where('fullName', 'like', $request['patient'].'%')->where('typeOfUser','=','U')->where('userStatus','Active')->get();
    }

    /** 
     * @param Request $request
     * @return array
     */
    protected function get_patients(Request $request, User $user){
    	return $user::where('typeOfUser','U')->where('userStatus','Active')->where('userStatus','Active')->get();
    }

    /** 
     * @param Request $request
     * @return int|array
     */
    protected function delete_patient(Request $request){

      $patient = \App\User::find($request['patient']);
      $patient->userStatus = 'Eliminado';
      $patient->save();

      return $patient->id;

    }
}
