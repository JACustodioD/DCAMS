<?php

namespace App\Http\Controllers\Storage;

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

      if(Auth::user()->image){
        $path = Storage::disk('local')->delete(Auth::user()->image);
      }

      $file = $request->file('perfil');
      $fileName = Auth::user()->userName;
      $path = Storage::disk('local')->put($fileName,$file);



    	$user = new User();

		  $userList = $user::where('id',Auth::user()->id)->take(1)->get();

      foreach ($userList as $userInfo) {
        $user = $userInfo;
      }
      $user->image = $path;
      $user->save();

       return redirect('/pacientes');
    }
}
