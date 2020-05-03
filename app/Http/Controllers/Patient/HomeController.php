<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller{


  protected function index(){
    return view('user.index',[
        'dates' => \App\Date::where('user',Auth::user()->id)->orderBy('id','desc')->get()->take(1),
        'treatments' => \App\Treatment::join('services','services.id','=','treatments.service')->where('user',Auth::user()->id)->get(),
        'cont' => 0
    ]);
  }
}
