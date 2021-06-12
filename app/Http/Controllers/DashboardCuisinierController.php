<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Recette;
use App\Models\Categorie;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardCuisinierController extends Controller
{
    //
    public function index(){
        
        $recettes = Recette::where('user_id','=',Auth::user()->id)->count();
        $categorie = Categorie::all();
       // $comments = Comment::all();
        $countcategorie = $categorie->count();
        $produit = Produit::all()->count();
        //$recette = Recette::where('user_id','=',Auth::user()->id);
        $comments = Comment::join('recettes','recettes.id','=','comments.recette_id')->where('user_id','=',Auth::user()->id)->get();
        $nbrcomments = Comment::join('recettes','recettes.id','=','comments.recette_id')->where('user_id','=',Auth::user()->id)->count();
        
        return view ('home-dashboard-cuisinier',['recettes' => $recettes , 'countcategorie' => $countcategorie , 'produit' => $produit  ,'comments'=>$comments , 'nbrcomments'=>$nbrcomments]);
    }
}
