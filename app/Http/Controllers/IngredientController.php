<?php

namespace App\Http\Controllers;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function deleteing($id){
        $ingredient = Ingredient::find($id);
            
        $ingredient->delete();
    
       
      }
}
