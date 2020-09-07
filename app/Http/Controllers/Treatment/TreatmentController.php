<?php

namespace App\Http\Controllers\Treatment;

use App\Http\Controllers\Controller;
use App\Treatment;
use Illuminate\Http\Request;
use App\Date;
use App\Service;
use App\User;
use Illuminate\Support\Facades\Auth;

class TreatmentController extends Controller
{

    /** @param App\User $patient */
    public function show_treatments($patient){

        $patientID = base64_decode($patient);

        $patientInfo = \App\User::where('id',$patientID)->take(1)->get();

        if(!$patientInfo){

            return redirect("/");
      
        }
        
        $treatmentList = \App\Treatment::select('treatments.id','startDate','endDate','serviceName','serviceDescription','cost')->join('services','services.id','=','treatments.service')->where('user',$patientID)->where('treatmentStatus','Active')->get();
        
        foreach($treatmentList as $treatmentInfo){
            $treatmentInfo->cost = "$".number_format ( $treatmentInfo->cost ,  0 , "." , "," );
            $treatmentInfo->startDate = date("d/m/Y", strtotime($treatmentInfo->startDate));
            $treatmentInfo->endDate = date("d/m/Y", strtotime($treatmentInfo->endDate));
        }
        $servicesList = \App\Service::all();

        foreach($servicesList as $serviceInfo){
            $serviceInfo->cost = "$".number_format($serviceInfo->cost, 0, '.', ',');
        }

        return view('admin.tratamientos',[
            'patient' => $patientInfo,
            'treatments' => $treatmentList,
            'services' => $servicesList

        ]);
    }

    /** 
     * @param Illuminate\Http\Request $request
     * @return array
     *  */
    public function assign_treatment(Request $request){

        $today = date('Y-m-d');


        if($request['startDate'] < $today){
            $error = ['response' => 'true', 'message' => "No puede agendar citas en días anteriores a hoy."];
        }
        
        if($request['startDate'] > $request['endDate']){
            $error = ['response' => 'true','message' => 'La fecha de termino de tratamiento debe ser mayor a la de incio'];
        }

        $serviceInfo =  \App\Service::select('id','cost')->where('id',$request['service'])->first();
        
        if(!$serviceInfo) {
            $error = ['response' => 'true', 'message' => 'El servicio seleccionado no existe.'];
        }

        $patientInfo =  \App\User::where('id',$request['patient'])->first();
        
        if(!$patientInfo) {
            $error = ['response' => 'true', 'message' => 'No es posible continuar. Existe un error con el paciente.'];
        }

        if (isset($error)){
            return $error;
        }

        $new_treatment = new Treatment();
        $new_treatment->service = $serviceInfo->id;
        $new_treatment->user = $patientInfo->id;
        $new_treatment->startDate = $request['startDate'];
        $new_treatment->endDate = $request['endDate'];
        $new_treatment->total = $serviceInfo->cost;
        $new_treatment->observations = "";
        $new_treatment->treatmentStatus = 'Active';
        $new_treatment->save();

        $treatmentInfo = \App\Treatment::join('services','services.id','=','treatments.service')->where('treatments.id',$new_treatment->id)->where('treatmentStatus','Active')->take(1)->get(); 
        
        foreach($treatmentInfo as $treatment){
            $treatment->startDate = date("d/m/Y", strtotime($treatment->startDate));
            $treatment->endDate = date("d/m/Y", strtotime($treatment->endDate));
            $treatment->cost = "$".number_format($treatment->cost, 0 , '.', ',');
        }
        $response = [
            'response' => false,
            'message' => 'Cambios Aplicados',
            'treatment' => $treatmentInfo
        ];

        return $response;


    }

    /**
     * @param Illiminate\Http\Request $request
     * @return array
     */
    public function cancel_treatment(Request $request){

        $treatment = new Treatment();

        $update_treatment = $treatment::find($request['treatment']); 

        if(!$update_treatment){
            return ['response' => 'true', 'messsage' => 'El tratamineto seleccionado no existe. No es posible continuar'];
        }
        

        $update_treatment->treatmentStatus = "Cancelled";
        $update_treatment->save();
        
    
        return ['response' => false, 'message' => 'Cambios Aplicados', 'treatment' => $update_treatment->id];


    }


    /** 
     * @param Illuminate\Http\Request $request
     * @return array
     * */
    public function service_values(Request $request){

        $service = new Service();

        $serviceInfo = $service::select('cost','serviceDescription')->where('id',$request['servicio'])->first();
        
        $serviceInfo->cost = "$".number_format($serviceInfo->cost, 0, '.', ',');

        return $serviceInfo;

    }

    public function add_treatment(){}
    public function update_treatment(){}
    public function delete_treatment(){}
}