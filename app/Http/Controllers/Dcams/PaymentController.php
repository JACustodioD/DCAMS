<?php

namespace App\Http\Controllers\Dcams;

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
    public function addPayment(Request $request, Payment $payment){

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
     * @param Illuminate\Http\Request $request
     * @return array
     */

     public function paymentHistory(Request $request) {


        $treatmentInfo = Treatment::find($request['treatment']);

        if(!$treatmentInfo || $treatmentInfo->treatmentStatus != 'Active') {
            $error = ['response' => true, 'message' => 'El tratamiento no existe. No es posible continuar'];
        }

        $paymentList = Payment::where('treatment', $treatmentInfo->id)->get();

       foreach($paymentList as $payment) {
            $payment->credit = "$".number_format($payment->credit, 0, '.', ',');
            //list($date,$hour) = explode(" ",$payment->created_at);
            //$payment->created_at = date("d/m/Y", strtotime($date));
        }

        if(isset($error)) {
            return $error;
        }

        $response = [
            'response' => false,
            'payments' => $paymentList,
            'total' => "$".number_format($treatmentInfo->total, 0, '.', ',')
        ];
        return $response;
     }
}
