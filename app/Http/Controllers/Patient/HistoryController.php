<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Storie;
use App\User;
use App\Sffering;
use App\Records_history;

class HistoryController extends Controller
{

    public function show(){

        if(!Auth::user()->history){

          $sffering = new Sffering;
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

          $historyList = Records_history::select('sfferingDescription','sfferingCategory')->join('sfferings','sfferings','sfferings.id')->join('stories','stories','stories.id')->where('user','=',Auth::user()->id)->get();

          return view('user.historiaMedica',[
            'historyList' => $historyList
          ]);

        }
    }

    public function store(Request $request){
      $sffering = new Sffering;

      $idList = Sffering::select('id')->get();

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
        $records = new Records_history();
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
