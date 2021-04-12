<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class CuisinierController extends Controller
{
    //

    public function index(){


        $cuisiniers = User::where('type', 1)->get();
        return view('cuisiniers',compact('cuisiniers'));
   }
}
