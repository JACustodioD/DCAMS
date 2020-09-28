<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Payment;
use App\Service;
use App\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    /**
     * @param Illuminate\Htpp\Request $request
     * @return array
     */
    public function add_payment(Request $request, Payment $payment){

        $today = date('Y-m-d');
        
        $treatmentInfo = Treatment::find($request['treatment']);

        if(!$treatmentInfo || $treatmentInfo->treatmentStatus != 'Active') {
            $error = ['response' => true, 'message' => 'El tratamiento seleccionado no existe o fue cancelado. No es posible continuar'];
        }
        if($treatmentInfo->total <= 0 ) {
            $error = ['response' => true, 'message' => 'Se han completado los pagos de este tratamiento. No es necesario realizar este pago.'];
        }

        $newTotal = intval($treatmentInfo->total) - intval($request['amount']);
         
        if($newTotal < 0)
        {
            $error = ['response' => true, 'message' => 'El pago es mayor al total faltante. Por favor ingrese la cantidad exacta'];
        }

        if(isset($error)) {
            return $error;
        }

        $payment = new Payment();
        $payment->treatment = $treatmentInfo->id;
        $payment->credit = $request['amount'];
        $payment->observation = "";
        $payment->save();

        $treatmentInfo->total = $newTotal;
        if($newTotal == 0) {
            $treatmentInfo->treatmentStatus = 'PaidOut';
        }
        $treatmentInfo->save();

        $response = [
            'response' => false,
            'message' => 'Pago registrado.',
        ];
    
        return $response;

    }

    /**
     * Muestra el historial de los pagos realizados
     * @param Illuminate\Http\Request $request
     * @return array
     */
     public function payment_history(Request $request)
     {

        $treatmentInfo = Treatment::find($request['treatment']);

        if(!$treatmentInfo || $treatmentInfo->treatmentStatus != 'Active') {
            $error = ['response' => true, 'message' => 'El tratamiento no existe. No es posible continuar'];
        }

        $payment_list = Payment::where('treatment', $treatmentInfo->id)->get();

       foreach($payment_list as $payment) {
            $payment->credit = "$".number_format($payment->credit, 0, '.', ',');
            list($date,$hour) = explode(" ",$payment->created_at);
            $payment->date = date("d-m-Y", strtotime($date));
        }

        if(isset($error)) {
            return $error;
        }

        $response = [
            'response' => false,
            'payments' => $payment_list,
            'total' => "$".number_format($treatmentInfo->total, 0, '.', ',')
        ];
        return $response;
     }

    /**
     * Muestra el tratamiento con su respectiva información de pagos
     * @param App\Payment
     * @return view
     */
    public function show_payment(Payment $payment)
    {
        $payments_list = Treatment::select('serviceName','services.cost','treatments.total','treatments.endDate','treatments.id','treatmentStatus')->join('services','treatments.service','=','services.id')->where('treatments.user',Auth::user()->id)->get();
         
        foreach ($payments_list as $payment) {
            $payment->cost = number_format($payment->cost, 2, '.', ',');
            $payment->total = number_format($payment->total, 2, '.', ',');
            $payment->endDate = date('d-m-Y',strtotime($payment->endDate));
        }    

        return view('user.historiaPagos',[
            'payments' => $payments_list
        ]);
}
 
}
