<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
class ProfilController extends Controller
{
   
     public function index(){

        $type=Auth::user()->type;

        if($type==0)
        {
           return view('profil-admin');
        }
        else

        {
           return view('profil-cuisinier');
        }
    
      
   }
 

  public function update(Request $request, $id){

      $profil = User::find($id);
      if($profil->type==0)
      {
      $profil->name = $request->input('name');
       $profil->date_naissance = $request->input('date_naissance');
      $profil->email = $request->input('email');
       
                $profil->password = Hash::make($request['password']);
    
      $profil->save();
      return redirect('profil-admin');  }
      else
      {
      $profil->name = $request->input('name');
       $profil->date_naissance = $request->input('date_naissance');
      $profil->email = $request->input('email');
      $profil->password = Hash::make($request['password']);
      $profil->save();
      return redirect('profil-cuisinier');  }



    }
}
