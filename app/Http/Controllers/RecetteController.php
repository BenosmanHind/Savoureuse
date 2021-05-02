<?php

namespace App\Http\Controllers;

use App\Models\Etape;
use App\Models\Produit;
use App\Models\Recette;
use App\Models\Categorie;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RecetteController extends Controller
{
    //
    public function index(){
        $produits = Produit::all();
        $categories = Categorie::all();
        return view('addrecette',compact('produits','categories'));
     }
 
      public function recettedetail($id){
          $recette = Recette::find($id);
          return view('recettepage',['recette'=>$recette]);
      }
      
     public function list_recette(){
         $recettes = Recette::all();
         $categories = Categorie::all();
         return view('recette_cuisinier',['recettes'=>$recettes],['categories'=>$categories]);
     }

     public function list_recette_admin(){
        $recettes = Recette::all();
        return view('recette_admin',['recettes'=>$recettes]);
    }
     
     public function store(Request $request){
         
         
         $recette = new Recette();
         $recette->user_id = Auth::user()->id; 
         $recette->titre = $request['titre'];
         $recette->categorie_id = $request['categorie'];
         $recette->temps_preparation = $request['temps_preparation'];
         $recette->temps_cuisson = $request['temps_cuisson'];
         $recette->cout = $request['cout'];
         $recette->difficulte = $request['difficulte'];
         $recette->save();
         
        for($j = 1; $j <=$request->nbringrd ; $j++){
            $ingredient = new Ingredient();
         
            $ingredient->quantite = $request['quantite'];
            $ingredient->produit_id = $request['produits'];
            $ingredient->unite = $request['unite'];
            $recette->ingredients()->save($ingredient);

        }
        
         

        //Insertion des etapes
                
        for ($i = 1; $i <= $request->nbr ; $i++) {
            $etape= new Etape();
            $etape->description = $request['step'.$i];
            $recette->etapes()->save($etape);
        }
                
        
        
           return redirect('/recettes_cuisinier')

         ->with('success','Recette ajoutée avec success!');
      
     }

     public function destroy($id)
    {
        $recette = Recette::find($id);
        
        $recette->delete();
 
        return redirect('recettes_admin');
    }

    public function destroy_recette($id)
    {
        $recette = Recette::find($id);
        
        $recette->delete();
 
        return redirect('recettes_cuisinier');
    }
}
