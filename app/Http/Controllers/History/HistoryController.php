<?php

namespace App\Http\Controllers\History;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Storie; 
use App\User;

class HistoryController extends Controller
{

    /**
     * Muestra la historia medica del paciente seleccionado del lado de admin
     * @param string $patientID
     * @return view
     */
    public function print_history_admin($patientID)
    {

        $patientID = base64_decode($patientID);
  
          return view('admin.historialmedico',[
              'sfferings' => \App\Records_history::select('sfferingDescription','sfferingCategory')->join('stories','stories','stories.id')->join('sfferings','sfferings','sfferings.id')->where('user',$patientID)->get(),
              'patients' => \App\User::where('id',$patientID)->get()
          ]);
    }
  
    /**
     * Muestra la historia medica en caso de existir o el forumulario en caso no existir
     * la historia medica en el lado del paciente.
     * 
     * @return view
     */
    public function print_history_user()
    {
        if(!Auth::user()->history) {
  
            $sffering = new \App\Sffering;
            $dental_list = $sffering::where('sfferingCategory','hdental')->get();
            $general_list = $sffering::where('sfferingCategory','hgeneral')->get();
            $observ_list = $sffering::where('sfferingCategory','observ')->get();

            $data = [
                'dentalList' => $dental_list,
                'generalList' => $general_list,
                'observList' => $observ_list,
                'item' => 'A'
            ];
  
        } else {
  
            $historyList = \App\Records_history::select('sfferingDescription','sfferingCategory')->join('sfferings','sfferings','sfferings.id')->join('stories','stories','stories.id')->where('user','=',Auth::user()->id)->get();
            
            $data = ['historyList' => $historyList];
  
        }

          return view('user.historiaMedica', $data);
    }


    /**
     * Habilita la edicion de la historia medica en la vista de usuario
     * @param Illuminate\Http\Request $request
     * @param App\User $patient
     * @return boolean 
     */
    public function enabled(Request $request, User $patient)
    {
        $patient = $patient::where('id',$request['patient'])->update(['history'=>0]);
        $historia = \App\Storie::where('user', '=', $request['patient'])->delete();


        return "true";
    }

    /**
     * Agrega el historial medico con los padecimientos seleccionados
     * @param Illuminate\Http\Request $request
     * @return redirect
     */
    public function add_history(Request $request)
    {
        $sffering = new \App\Sffering;
  
        $sffering_ID_list = \App\Sffering::select('id')->get();

        $sffering_list = [];
        
        // Verficamos que padecimientos fueron seleccionados
        foreach ($sffering_ID_list as $sffering_ID)
        {
          if($request[$sffering_ID->id] == 'si')
          {
            $sffering_list[] = $sffering_ID->id;
          }
        }
        
        // Si no se selecciono algún tratamiento finalizamos el proceso
        if(!$sffering_list)
        {
            return redirect('/pacientes/historiamedica');
        }
        
        // creamos una nueva historia medica
        $storie = new Storie();
        $storie->user = Auth::user()->id;
        $storie->historyStatus = "Active";
        $storie->save();
  
        // Creamos todos los registros de la historia por cada padecimiento seleccionado
        foreach ($sffering_list as $sffering)
        {
          $records = new \App\Records_history();
          $records->sfferings = intval($sffering);
          $records->stories = $storie->id;
          $records->save();
        }
  
        // Actualizamos el status del historial medico del paciente
        $user = new User();
        $userList = $user::where('id',Auth::user()->id)->take(1)->get();
  
        foreach ($userList as $userInfo)
        {
            $user = $userInfo;
        }
        $user->history = true;
        $user->save();
  
  
        return redirect('/pacientes/historiamedica');

    }
}
