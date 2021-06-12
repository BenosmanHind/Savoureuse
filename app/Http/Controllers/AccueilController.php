<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use App\Models\Recette;
use App\Models\Categorie;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //
    public function index(){
        $recettes = Recette::all();
        $categories = Categorie::all();
        $comments = Comment::all();
        $countcomment = $comments->count();
        $comment = Comment::join('recettes','recettes.id','=','comments.recette_id'); 
        $countrecette = $recettes->count();
        $membres = User::where('type','=','1')->count();
        $countcategorie = $categories->count();
        
        $commentrecette = $comment->count();
     
        return view('welcome', compact('recettes','categories','countcomment','countrecette','membres','countcategorie','commentrecette'));
    }


    public function recettes_categorie(Request $request){

           $recettes = Recette::where('categorie_id',$request->id)->get();
           $categories = Categorie::all();
          

            return view ('recette-categorie',compact('recettes','categories'));
        

    }
}
