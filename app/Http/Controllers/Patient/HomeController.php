<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Date;

class HomeController extends Controller{

  public function __construct(){

  }

  protected function index(){
    $date = new Date();

    $lastDate = $date::where('user',Auth::user()->id)->orderBy('id_date','desc')->get()->take(1);
    return view('user.index',[
        'dates' => $lastDate,
        'treatments' => \App\Treatment::join('services','services.id_service','=','treatments.service')->where('user',Auth::user()->id)->get(),
       'cont' => 0
    ]);
  }
}
