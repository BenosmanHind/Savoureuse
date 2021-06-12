<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategorieController extends Controller
{
    //
    public function index(){
        $categories = Categorie::all();
        for($i = 1; $i < 13; $i++) {
            $nbr = Recette::whereMonth('created_at', $i)->count();
            $values[$i] = $nbr;

        }
        return view('categorie',compact('categories','values'));
 
         
     }
 
     public function store(Request $request){
           $categorie = new Categorie();
           $categorie->name = $request['name'];
 
           $categorie->save();
           return Redirect::back();
     }

     public function edit($id){

     $categorie = Categorie::find($id);
     
      return view('edit_categorie',compact('categorie'));
     }

     public function update(Request $request, $id){
      
        $categorie = Categorie::find($id);
        $categorie->name = $request['name']; 
        $categorie->save();

        return redirect('categorie');
     }



     public function destroy($id)
    {
        $categorie = Categorie::find($id);
        
        $categorie->delete();
 
        return redirect('categorie');
    }
}
