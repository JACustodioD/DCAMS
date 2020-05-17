<?php

namespace App\Http\Controllers;

use App\Date;
use App\User;
use Illuminate\Http\Request;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = new Date();
        $cita->user = $request['usuario'];
        $cita->dateOfAppointment = $request['fecha'];
        $cita->hour = $request['hora'];
        $cita->affair = $request['asunto'];
        $cita->commentary = "";
        $cita->status = "Pendiente";
        $cita->save();

        return "true";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function show(Date $date)
    {
        return view('admin.miscitas',[
            'citas' => $date::join('users','user','user.id')->orderBy('dateOfAppointment')->orderBy('hour')->get()
        ]);
    }
    public function buscarCitas(Request $request, Date $date){
        return $date::join('users','user','id')->where('name', 'like', $request['paciente'].'%')->where('typeOfUser','=','U')->get();
    }
     public function mostrarCitas(Request $request, Date $date){
        return $date::join('users','user','id')->get();
    }

    public function citasUser(Request $request){
        return view('admin.citas',[
            'users' => \App\User::where('id',$request['paciente'])->take(1)->get(),
            'dates' => \App\Date::where('user',$request['paciente'])->orderBy('id_date','desc')->take(1)->get(),

        ]);
    }
    public function cancelarCita(Request $request, Date $date){
        $citas = $date::where('id_date',$request['cita'])->update(['status'=>'Cancelada','commentary' => $request['comentario']]);
        return "true";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function edit(Date $date)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Date $date)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function destroy(Date $date)
    {
        //
    }
}
