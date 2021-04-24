<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategorieController extends Controller
{
    //
    public function index(){
        $categories = Categorie::all();
        return view('categorie',compact('categories'));
 
         
     }
 
     public function store(Request $request){
           $categorie = new Categorie();
           $categorie->name = $request['name'];
 
           $categorie->save();
           return Redirect::back();
     }

     public function destroy($id)
    {
        $categorie = Categorie::find($id);
        
        $categorie->delete();
 
        return redirect('categorie');
    }
}
