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
            'padecimientos' => \App\Storie::select('description','category')->join('sfferings','sffering','id_sfferings')->where('user','=',Auth::user()->id)->get()
        ]);
    }
    public function adminShow(Request $request){
        return view('admin.historialmedico',[
            'padecimientos' => \App\Storie::select('description','category')->join('sfferings','sffering','id_sfferings')->where('user','=',$request['paciente'])->get(),
            'users' => \App\User::where('id',$request['paciente'])->get()
        ]);
    }
    public function store(Request $request){

    	for($i=0;$i<=28;$i++){
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


    	return redirect('/pacientes/historiamedica');


    }

    public function habilitar(Request $request, User $user){
        $user = $user::where('id',$request['usuario'])->update(['hisotria'=>0]);
        $historia = \App\Storie::where('user', '=', $request['usuario'])->delete();
        

        return "true";
    }
}
