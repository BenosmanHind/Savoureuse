<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProduitController extends Controller
{
    //
    public function index(){
       $produits = Produit::all();
       return view('produit',compact('produits'));

        
    }

    public function store(Request $request){
          $produit = new Produit();
          $produit->name = $request['name'];

          $produit->save();

          return Redirect::back();
    }
}
