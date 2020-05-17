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


    public function adminTratamientos($patient){

      $patientID = base64_decode($patient);

      $patients = \App\User::where('id',$patientID)->take(1)->get();

      if(sizeOf($patients) == 0)
      {
        return redirect("/");
      }

        return view('admin.tratamientos',[
            'patients' => $patients,
            'treatments' => \App\Treatment::join('services','services.id','=','treatments.service')->where('user',$patientID)->where('treatmentStatus','Active')->get(),
            'services' => \App\Service::all()

        ]);
    }
    public function agregarTratamiento(Request $request, Treatment $treatment){

        $treatment->service = $request['servicio'];
        $treatment->user = $request['user'];
        $treatment->startDate = $request['startDate'];
        $treatment->endDate = $request['endDate'];
        $treatment->total = $request['costo'];
        $treatment->observations = "";
        $treatment->treatmentStatus = 'Active';
        $treatment->save();
       return \App\Treatment::join('services','services.id','=','treatments.service')->where('treatments.id',$treatment->id)->where('treatmentStatus','Active')->take(1)->get();


    }
    public function cancelarTratamiento(Request $request, Treatment $treatment){
        $tratamiento = $treatment::where('id',$request['tratamiento'])->update(['treatmentStatus'=>0]);

        return "true";


    }

    public function show(Request $request,Service $service)
    {
        return $service::where('id',$request['servicio'])->first();

    }
}
