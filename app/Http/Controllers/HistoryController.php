<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Storie;
use App\User;

class HistoryController extends Controller
{

    public function show(){
        return view('user.historiaMedica',[
            'padecimientos' => \App\Storie::select('description')->join('sfferings','sffering','id_sfferings')->where('user','=',Auth::user()->id)->get()
        ]);
    }
    public function store(Request $request){

    	for($i=0;$i<=27;$i++){
    		if ($request[$i] == 'si') {
    			$historia[] = $i;
    		}
    	}


    	for ($i=0;$i<=sizeof($historia)-1;$i++) {
    		$registro = new Storie();
    		$registro->user = Auth::user()->id;
    		$registro->sffering = intval($historia[$i]);
    		$registro->save();
    	}
    	$user = new User();
		$u = $user::where('id',Auth::user()->id)->take(1)->get();

      	foreach ($u as $t) {
        	$user = $t;
      	}
      	$user->hisotria = true;
      	$user->save();


    	return redirect('/pacientes/home');


    }
}
