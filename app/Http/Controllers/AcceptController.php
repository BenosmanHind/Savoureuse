<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class AcceptController extends Controller
{
    //
    public function accept($id){
        
        $recette = Recette::find($id);
        $recette->accept = 1;
        $recette->save();
      
        return redirect('/recettes_admin');
    }
}
