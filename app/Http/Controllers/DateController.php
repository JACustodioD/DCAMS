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
        //
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
            'citas' => $date::join('users','user','id')->orderBy('dateOfAppointment')->orderBy('hour')->get()
        ]);
    }
    public function buscarCitas(Request $request, Date $date){
        return $date::join('users','user','id')->where('name', 'like', $request['paciente'].'%')->where('typeOfUser','=','U')->get();
    }
     public function mostrarCitas(Request $request, Date $date){
        return $date::join('users','user','id')->get();
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
