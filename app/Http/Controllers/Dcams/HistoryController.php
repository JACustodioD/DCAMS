<?php

namespace App\Http\Controllers\Dcams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Storie;
use App\User;

class HistoryController extends Controller
{


    public function index($patientID){

      $patientID = base64_decode($patientID);

        return view('admin.historialmedico',[
            'sfferings' => \App\Records_history::select('sfferingDescription','sfferingCategory')->join('stories','stories','stories.id')->join('sfferings','sfferings','sfferings.id')->where('user',$patientID)->get(),
            'patients' => \App\User::where('id',$patientID)->get()
        ]);
    }

    public function enabled(Request $request, User $patient){
        $patient = $patient::where('id',$request['patient'])->update(['history'=>0]);
        $historia = \App\Storie::where('user', '=', $request['patient'])->delete();


        return "true";
    }
}
