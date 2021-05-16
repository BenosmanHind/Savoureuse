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

    public function activer($id){
        $user = User::find($id);
        $user->activer = 1;
        $user->save();
        return redirect('/cuisiniers');
    }

    public function desactiver($id){
        $user = User::find($id);
        $user->activer = 0;
        $user->save();
        return redirect('/cuisiniers');
        
    }
}
