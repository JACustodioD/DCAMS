<?php

namespace App\Http\Controllers\Appointment;


use App\Http\Controllers\Controller;
use App\Date;
use App\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    /** 
     * @param Illuminate\Http\Request $request
     * @return boolean 
     */
    public function add_appointment(\Illuminate\Http\Request $request) {
        $today = date('Y-m-d');
        $open_hour = '09:00';
        $close_hour = '18:00';

        if ($request['date'] < $today) {
            $error = ['response' => true, 'message' => 'no puede agendar cita antes de hoy'];
            return  $error;
            
        }
        if($request['hour'] < $open_hour || $request['hour'] > $close_hour) {
            $error = ['response' => true, 'message' => 'Nuestros horarios de atencion son de 9:00 - 18:00'];
            return  $error;
        }

        $new_date = new Date();

        $new_date->user = $request['patient'];
        $new_date->dateOfAppointment = $request['date'];
        $new_date->hour = $request['hour'];
        $new_date->affair = $request['affair'];
        $new_date->dateStatus = 'Active';
        $new_date->commentary = "";
        $new_date->save();
    
       return ['response' => false];

        
    }

    /** 
     * @param \App\Date $date
     * @param Illuminate\Http\Request $request
     * @return array
     * */
    public function show_appointment(Date $date, Request $request) {

        $AppointmentsList = $date = $date::select('dates.id','dateOfAppointment','hour','affair','users.id','fullName')->join('users','user','users.id')->where('dateStatus','Active')->orderBy('dateOfAppointment')->get();
        
        foreach ($AppointmentsList as $Appointment) {
            $Appointment['dateOfAppointment'] = date("d-m-Y", strtotime($Appointment['dateOfAppointment']));;
        }

        if($request->empty) {
            return $AppointmentsList;
        } else {
            
            return view('admin.miscitas',[
                'citas' => $AppointmentsList
            ]);
        }

    }
 
    /**
     * @param Illuminate\Http\Request $request
     * @param \App\Date $date
     * 
     * @return array
     */
    public function search_appointment(Request $request, Date $date){
        
        $AppointmentsList = $date::join('users','user','users.id')->where('fullName', 'like', $request['paciente'].'%')->where('typeOfUser','=','U')->where('dateStatus','Active')->get();
    
        foreach ($AppointmentsList as $Appointment) {
            $Appointment['dateOfAppointment'] = date("d-m-Y", strtotime($Appointment['dateOfAppointment']));;
        }
        return $AppointmentsList;
    }


    /**
     * @param Illuminate\Http\Request $request
     * @param \App\Date $date
     * 
     * @return array
     */
    public function citasUser($patientID){

      $patientID = base64_decode($patientID);
        return view('admin.citas',[
            'users' => \App\User::where('id',$patientID)->take(1)->get(),
            'dates' => \App\Date::where('user',$patientID)->orderBy('id','desc')->take(1)->get(),

        ]);
    }
    
    /**
     * @param Illuminate\Http\Request $request
     * @param App\Date $date
     * 
     * @return array
     */
    public function cancel_appointment(Request $request, Date $date){
        $citas = $date::where('id',$request['date'])->update(['dateStatus'=>'Cancelled','commentary' => $request['commentary']]);
        return "true";
    }

}
