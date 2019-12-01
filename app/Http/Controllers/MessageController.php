<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message){
        return view('admin.index',[
            'messages' => \App\Message::where('status','Pendiente')->orderBy('date')->orderBy('hour')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        $atendido = $message->find($request['mensaje']);
        $atendido->status = "Atendido";
        $atendido->save();

        return ($atendido);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Message $message)
    {
        $mensaje = $message->find($request['mensaje']);
        $mensaje->delete();
        return ($mensaje);
    }
}
