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
}
