<?php

namespace App\Http\Controllers\History;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Storie; 
use App\User;

class HistoryController extends Controller
{


   
    public function patient_history_admin($patientID){

        $patientID = base64_decode($patientID);
  
          return view('admin.historialmedico',[
              'sfferings' => \App\Records_history::select('sfferingDescription','sfferingCategory')->join('stories','stories','stories.id')->join('sfferings','sfferings','sfferings.id')->where('user',$patientID)->get(),
              'patients' => \App\User::where('id',$patientID)->get()
          ]);
      }
  
      public function patient_history_user(){
  
          if(!Auth::user()->history){
  
            $sffering = new \App\Sffering;
            $dentalList = $sffering::where('sfferingCategory','hdental')->get();
            $generalList = $sffering::where('sfferingCategory','hgeneral')->get();
            $observList = $sffering::where('sfferingCategory','observ')->get();
  
            return view('user.historiaMedica',[
                'dentalList' => $dentalList,
                'generalList' => $generalList,
                'observList' => $observList,
                'item' => 'A'
              ]);
  
          }else{
  
            $historyList = \App\Records_history::select('sfferingDescription','sfferingCategory')->join('sfferings','sfferings','sfferings.id')->join('stories','stories','stories.id')->where('user','=',Auth::user()->id)->get();
  
            return view('user.historiaMedica',[
              'historyList' => $historyList
            ]);
  
          }
      }

    public function enabled(Request $request, User $patient){
        $patient = $patient::where('id',$request['patient'])->update(['history'=>0]);
        $historia = \App\Storie::where('user', '=', $request['patient'])->delete();


        return "true";
    }


    public function add_history(Request $request){
        $sffering = new \App\Sffering;
  
        $idList = \App\Sffering::select('id')->get();
  
        foreach ($idList as $id) {
          if($request[$id->id] == 'si'){
            $historyList[] = $id->id;
          }
        }
  
  
        $storie = new Storie();
        $storie->user = Auth::user()->id;
        $storie->historyStatus = "Active";
        $storie->save();
  
        foreach ($historyList as $history) {
          $records = new \App\Records_history();
          $records->sfferings = intval($history);
          $records->stories = $storie->id;
          $records->save();
        }
  
          $user = new User();
            $userList = $user::where('id',Auth::user()->id)->take(1)->get();
  
            foreach ($userList as $userInfo) {
              $user = $userInfo;
            }
            $user->history = true;
            $user->save();
  
  
          return redirect('/pacientes/historiamedica');
  
  
      }
}
