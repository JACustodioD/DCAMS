<?php

namespace App\Http\Controllers\Petition;

use App\Petition;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PetitionController extends Controller
{
    function show_petitions(){
        
        $petitionList = \App\Petition::where('petitionStatus','Pendiente')->orderBY('date')->get();
        
        return view ('admin.index', ['petitions' => $petitionList]);
    }


    /** @param Request $request */
    function petition_status(Request $request){
        
        $petition_attended =  \App\Petition::find($request['petition']);

        $petition_attended->petitionStatus = 'Atendido';
        $petition_attended->save();
        

        return $petition_attended->id;
    }


    /** @param Request $request */
    function delete_petition(Request $request){
        
        $petition_attended =  \App\Petition::find($request['petition']);

        $petition_attended->petitionStatus = 'Eliminado';
        $petition_attended->save();
        

        return $petition_attended->id;
    }


    /** @param \Illuminate\Http\Request $request */
    function add_petition(Request $request){

        $valid_data = $request->validate([
            'nombre' =>['required','string','max:255'],
            'telefono' => ['required','string','min:10','max:12'],
            'fecha' => ['required','date'],
            'hora' => ['required','string'],
            'comentario' => ['required','string'],
        ]);

        $petition = new Petition();
        $petition->name = $valid_data['nombre'];
        $petition->phone = $valid_data['telefono'];
        $petition->date = $valid_data['fecha'];
        $petition->hour = $valid_data['hora'];
        $petition->petitionCommentary = $valid_data['comentario'];
        $petition->petitionStatus = 'Pendiente';

        $petition->save();


        return redirect('/message');
    }

}