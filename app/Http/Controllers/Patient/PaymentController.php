<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Payment;
use App\Service;
use App\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function show(Payment $payment)
    {
        $payments = Treatment::select('serviceName','services.cost','treatments.total','treatments.endDate','treatments.id_treatment','treatmentStatus')->join('services','treatments.service','=','services.id_service')->where('treatments.user',Auth::user()->id)->get();
        return view('user.historiaPagos',[
            'payments' => $payments
        ]);
    }

    public function payments(Request $request){
       $datos = \App\Payment::select('credit','created_at','observation')->where('treatment',$request['tratamientos'])->get();

        return $datos;
    }

}
