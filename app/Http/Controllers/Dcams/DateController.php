<?php

namespace App\Http\Controllers\Dcams;


use App\Http\Controllers\Controller;
use App\Date;
use App\User;
use Illuminate\Http\Request;

class DateController extends Controller
{

    /** 
     * @param Illuminate\Http\Request $request
     * @return boolean 
     */
    public function store(\Illuminate\Http\Request $request)
    {
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
        $new_date->dateStatus = 'Pendiente';
        $new_date->commentary = "";
        $new_date->save();
    
       return ['response' => false];

        
    }

    /** @param \App\Date $date */
    public function show(Date $date)
    {
        return view('admin.miscitas',[
            'citas' => $date::join('users','user','users.id')->orderBy('dateOfAppointment')->orderBy('hour')->get()
        ]);
    }


    /**
     * @param Illuminate\Http\Request $request
     * @param \App\Date $date
     * 
     * @return array
     */
    public function buscarCitas(Request $request, Date $date){
        return $date::join('users','user','id')->where('name', 'like', $request['paciente'].'%')->where('typeOfUser','=','U')->get();
    }

    /**
     * @param Illuminate\Http\Request $request
     * @param App\Date $date
     * 
     * @return array
     */
     public function mostrarCitas(Request $request, Date $date){
        return $date::join('users','user','id')->get();
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
    public function cancelarCita(Request $request, Date $date){
        $citas = $date::where('id',$request['date'])->update(['dateStatus'=>'Cancelada','commentary' => $request['commentary']]);
        return "true";
    }

}
