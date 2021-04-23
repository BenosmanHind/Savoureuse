<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    //
    public function index(){
        $produits = Produit::all();
        return view('addrecette',compact('produits'));
 
         
     }
}
