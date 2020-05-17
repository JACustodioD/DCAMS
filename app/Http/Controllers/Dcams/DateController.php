<?php

namespace App\Http\Controllers\Dcams;


use App\Http\Controllers\Controller;
use App\Date;
use App\User;
use Illuminate\Http\Request;

class DateController extends Controller
{

    public function store(Request $request)
    {

      $today =  date("Y-m-d");

      if ($request['fecha'] < $today){
      return false;

      }
        $cita = new Date();
        $cita->user = $request['usuario'];
        $cita->dateOfAppointment = $request['fecha'];
        $cita->hour = $request['hora'];
        $cita->affair = $request['asunto'];
        $cita->commentary = "";
        $cita->dateStatus = "Pendiente";
        $cita->save();

        return "true";
    }


    public function show(Date $date)
    {
        return view('admin.miscitas',[
            'citas' => $date::join('users','user','users.id')->orderBy('dateOfAppointment')->orderBy('hour')->get()
        ]);
    }


    public function buscarCitas(Request $request, Date $date){
        return $date::join('users','user','id')->where('name', 'like', $request['paciente'].'%')->where('typeOfUser','=','U')->get();
    }

     public function mostrarCitas(Request $request, Date $date){
        return $date::join('users','user','id')->get();
    }

    public function citasUser($patientID){

      $patientID = base64_decode($patientID);
        return view('admin.citas',[
            'users' => \App\User::where('id',$patientID)->take(1)->get(),
            'dates' => \App\Date::where('user',$patientID)->orderBy('id','desc')->take(1)->get(),

        ]);
    }
    public function cancelarCita(Request $request, Date $date){
        $citas = $date::where('id',$request['cita'])->update(['dateStatus'=>'Cancelada','commentary' => $request['comentario']]);
        return "true";
    }

}
