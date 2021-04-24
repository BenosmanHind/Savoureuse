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
    public function edit($id)
    {
        $produit = Produit::find($id);
        return view ('edit',['produit'=>$produit]);



    }
    public function update(Request $request, $id){
    	$produit = Produit::find($id);
    	$produit->name = $request->input('name');
    	
    	$produit->save();
    	return redirect('produit');    	
    }

    public function destroy($id)
    {
        $produit = Produit::find($id);
        
        $produit->delete();
 
        return redirect('produit');
    }
}
