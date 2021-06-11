<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Recette;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardCuisinierController extends Controller
{
    //
    public function index(){
        
        $recettes = Recette::where('user_id','=',Auth::user()->id)->count();
        $categorie = Categorie::all();
        $countcategorie = $categorie->count();
        $produit = Produit::all()->count();
        
        return view ('home-dashboard-cuisinier',['recettes' => $recettes , 'countcategorie' => $countcategorie , 'produit' => $produit]);
    }
}
