<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class ValidateController extends Controller
{
    //
    public function accept($id){
        
        $user = User::find($id);
        $user->accept = 1;
        $user->save();
       // $user->update(['accept'=> '1']); 
        return redirect('/cuisiniers');
    }
}
