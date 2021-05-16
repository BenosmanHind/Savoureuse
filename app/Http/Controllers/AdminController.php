<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

     public function store(Request $request)

    {
      
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'date_naissance' => $request['date_naissance'],
            'civilite' => $request['civilite'],
            'type' => 0,
            'accept' => 1,
          
             ]); 
 
        return redirect('admins');
        }
      
}
