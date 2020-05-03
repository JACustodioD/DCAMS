<?php

namespace App\Http\Controllers\Dcams;

use App\Message;

use App\Petition;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PetitionController extends Controller
{

    public function store(Request $request)
    {
        $validData = $request->validate([
            'nombre' =>['required','string','max:255'],
            'telefono' => ['required','string','min:10','max:12'],
            'fecha' => ['required','date'],
            'hora' => ['required','string'],
            'comentario' => ['required','string'],
        ]);

        $message = new Message();
        $message->name = $validData['nombre'];
        $message->phone = $validData['telefono'];
        $message->date = $validData['fecha'];
        $message->hour = $validData['hora'];
        $message->commentary = $validData['comentario'];
        $message->status = "Pendiente";
        $message->save();
        return redirect('/message');
    }


    public function index(Message $message){
        return view('admin.index',[
            'petitions' =>\App\Petition::all() //\App\Message::where('status','Pendiente')->orderBy('date')->orderBy('hour')->get()
        ]);
    }

    public function update(Request $request, Message $message)
    {
        $atendido = $message->find($request['mensaje']);
        $atendido->status = "Atendido";
        $atendido->save();

        return ($atendido);
    }

    public function destroy(Request $request,Message $message)
    {
        $mensaje = $message->find($request['mensaje']);
        $mensaje->delete();
        return ($mensaje);
    }
}
