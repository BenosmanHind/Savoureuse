<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    public function recette(){
        
        return $this->belongsTo(Recette::class);
    }

    public function produit(){
        
        return $this->belongsTo(Produit::class);
    }

    public function returnproduct(){
        $produit = null ; 
        $produit = Produit::find($this->produit_id);
        return $produit;
    }

}
