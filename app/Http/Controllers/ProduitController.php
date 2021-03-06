<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Recette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProduitController extends Controller
{
    //
    public function index(){
       $produits = Produit::all();
       for($i = 1; $i < 13; $i++) {
        $nbr = Recette::whereMonth('created_at', $i)->count();
        $values[$i] = $nbr;

    }
       return view('produit',compact('produits','values'));

        
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
        for($i = 1; $i < 13; $i++) {
            $nbr = Recette::whereMonth('created_at', $i)->count();
            $values[$i] = $nbr;

        }
        return view ('edit',['produit'=>$produit,'values'=>$values]);

        

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

    public function getProducts(){
        $produits = Produit::all();
        return $produits;
    }
public function searchproduit()
{ 

    
  $search_text=$_GET['query'];
  $produits = Produit::where('name','LIKE','%'.$search_text.'%')->get();
 for($i = 1; $i < 13; $i++) {
    $nbr = Recette::whereMonth('created_at', $i)->count();
    $values[$i] = $nbr;

}
   return view('searchproduit',['produits'=>$produits,'values'=>$values]);

}
}
