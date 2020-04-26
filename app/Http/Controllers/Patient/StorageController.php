<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\User;

class StorageController extends Controller{


    public function save(Request $request){
        $data = $request->validate([
            'perfil' =>['required','image',],
        ]);


      $file = $request->file('perfil');
      $nombre = $file->getClientOriginalName();
      $path = Storage::disk('local')->put($nombre,$request->file('perfil'));



    	$user = new User();
		  $u = $user::where('id',Auth::user()->id)->take(1)->get();

      foreach ($u as $t) {
        $user = $t;
      }
      $user->image = $path;
      $user->save();

       return redirect('/pacientes/home');
    }
}
