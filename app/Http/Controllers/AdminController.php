<?php

namespace App\Http\Controllers;


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
}
