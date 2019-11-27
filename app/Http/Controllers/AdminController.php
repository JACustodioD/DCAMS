<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function showPacientes(){
    	return view('admin.pacientes',[
    		"patients" => \App\User::where('typeOfUser','U')->get()
    	]);
    }
}
