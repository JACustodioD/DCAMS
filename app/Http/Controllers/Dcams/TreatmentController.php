<?php

namespace App\Http\Controllers\Dcams;

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
    public function showTreatments($patient){

        $patientID = base64_decode($patient);

        $patientInfo = \App\User::where('id',$patientID)->take(1)->get();

        if(!$patientInfo){

            return redirect("/");
      
        }
        
        $treatmentList = \App\Treatment::join('services','services.id','=','treatments.service')->where('user',$patientID)->where('treatmentStatus','Active')->get();
        
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
    public function addTreatment(Request $request){
        
        $serviceInfo =  \App\Service::select('id','cost')->where('id',$request['service'])->first();
        
        if(!$serviceInfo) {
            return ['response' => 'true', 'message' => 'El servicio seleccionado no existe.'];
        }

        $patientInfo =  \App\User::where('id',$request['patient'])->first();
        
        if(!$patientInfo) {
            return ['response' => 'true', 'message' => 'No es posible continuar. Existe un error con el paciente.'];
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
    public function cancelarTratamiento(Request $request, Treatment $treatment){
        $tratamiento = $treatment::where('id',$request['tratamiento'])->update(['treatmentStatus'=>0]);

        return "true";


    }
    /** 
     * @param Illuminate\Http\Request $request
     * @return array
     * */
    public function getServiceValues(Request $request){

        $service = new Service();

        $serviceInfo = $service::select('cost','serviceDescription')->where('id',$request['servicio'])->first();
        
        $serviceInfo->cost = "$".number_format($serviceInfo->cost, 0, '.', ',');

        return $serviceInfo;

    }
}
