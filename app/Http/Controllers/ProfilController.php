<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
class AdminController extends Controller
{
   
     public function index($id){

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

      $produit->save();
      return redirect('profil-admin');  }
      else
      {
      $profil->name = $request->input('name');
       $profil->date_naissance = $request->input('date_naissance');
      $profil->email = $request->input('email');

      $produit->save();
      return redirect('profil-cuisinier');  }


    }
}
