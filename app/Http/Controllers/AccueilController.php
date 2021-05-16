<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Categorie;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //
    public function index(){
        $recettes = Recette::all();
        $categories = Categorie::all();

        
     
        return view('welcome', compact('recettes','categories'));
    }


    public function recettes_categorie(Request $request){

           $recettes = Recette::where('categorie_id',$request->id)->get();
           $categories = Categorie::all();
            return view ('recette-categorie',compact('recettes','categories'));
        

    }
}
