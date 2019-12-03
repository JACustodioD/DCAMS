<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Service;
use App\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
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
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        $payments = \App\Treatment::select('services.name','services.cost','treatments.total','treatments.endDate','treatments.id_treatment')->join('services','treatments.service','=','services.id_service')->where('treatments.user',Auth::user()->id)->get();

        return view('user.historiaPagos',[
            'payments' => $payments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }

    public function payments(Request $request){
       $datos = \App\Payment::select('credit','created_at')->where('treatment',$request['tratamientos'])->get();
    
        return $datos;
    }
    public function adminpayments(Request $request){
       $datos = \App\Payment::select('credit','payments.created_at','total')->join('treatments','id_treatment','treatment')->where('treatment',$request['tratamientos'])->get();
    
        return $datos;
    }
    public function hacerPago(Request $request, Payment $payment){
        $total = \App\Treatment::select('total')->where('id_treatment',$request['tratamiento'])->get();
        foreach ($total as $t) {
            $to = $t['total'];
        }

        $newTotal = intval($to) - intval($request['cantidad']);

        $tratamiento = \App\Treatment::where('id_treatment',$request['tratamiento'])->update(['total'=>strval($newTotal)]);

        $payment->treatment = $request['tratamiento'];
        $payment->credit = $request['cantidad'];
        $payment->delay = 0;
        $payment->save();
    
        return "true";

    }
}
