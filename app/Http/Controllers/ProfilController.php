<?php

namespace App\Http\Controllers;
use App\Models\Recette;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
   
     public function index(){

      $type=Auth::user()->type;

      for($i = 1; $i < 13; $i++) {
         $nbr = Recette::whereMonth('created_at', $i)->count();
         $values[$i] = $nbr;

     }
        if($type==0)
        {
           return view('profil-admin',compact('values'));
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
      return redirect('home-dashboard-admin');  }
      else
      {
      $profil->name = $request->input('name');
       $profil->date_naissance = $request->input('date_naissance');
      $profil->email = $request->input('email');
      $profil->password = Hash::make($request['password']);
      $profil->save();
      return redirect('home-dashboard-cuisinier');  }



    }
}
