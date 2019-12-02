<?php

namespace App\Http\Controllers;

use App\Treatment;
use Illuminate\Http\Request;
use App\Date;
use App\Service;
use App\User;
use Illuminate\Support\Facades\Auth; 

class TreatmentController extends Controller
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
     * @param  \App\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $treatment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatment $treatment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment)
    {
        //
    }

    public function homeUser(){
        return view('user.index',[
            'dates' => \App\Date::where('user',Auth::user()->id)->orderBy('id_date','desc')->get()->take(1),
            'treatments' => \App\Treatment::join('services','services.id_service','=','treatments.service')->where('user',Auth::user()->id)->get(),
           'cont' => 0
        ]);
    }
    public function adminTratamientos(Request $request){
        return view('admin.tratamientos',[
            'users' => \App\User::where('id',$request['paciente'])->take(1)->get(),
            'treatments' => \App\Treatment::join('services','services.id_service','=','treatments.service')->where('user',$request['paciente'])->where('status','1')->get(),
            'services' => \App\Service::all()

        ]);
    }
    public function agregarTratamiento(Request $request, Treatment $treatment){

        $treatment->service = $request['servicio'];
        $treatment->user = $request['user'];
        $treatment->startDate = $request['startDate'];
        $treatment->endDate = $request['endDate'];
        $treatment->total = $request['costo'];
        $treatment->status = 1;
        $treatment->save();
       return \App\Treatment::join('services','services.id_service','=','treatments.service')->where('id_treatment',$treatment->id)->where('status','1')->take(1)->get();


    }
    public function cancelarTratamiento(Request $request, Treatment $treatment){
        $tratamiento = $treatment::where('id_treatment',$request['tratamiento'])->update(['status'=>0]);

        return "true";


    }
}
