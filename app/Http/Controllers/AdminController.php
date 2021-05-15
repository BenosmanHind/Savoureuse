<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{
    //

    public function index(){


        $admins = User::where('type', 0)->get();
        return view('admins',compact('admins'));
   }


   public function destroy($id)
   {
       $admin = User::find($id);
       
       $admin->delete();

       return redirect('admins');
   }

     function create(array $data)
    {
        if($data['admin'] == 'admin'){
             return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'date_naissance' => $data['date_naissance'],
            'civilite' => $data['civilite'],
            'type' => 0,
            'password' => Hash::make($data['password']),
        ]);
             }

        return redirect('admins');
        
      }
}
