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

     function create(Request $request)

    {
      
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'date_naissance' => $request['date_naissance'],
            'civilite' => $request['civilite'],
            'type' => 0,
             'accept' => 1,
            'password' => Hash::make($request['password']),

        
             ]); 
 
        return redirect('admins');
        }
      
}
