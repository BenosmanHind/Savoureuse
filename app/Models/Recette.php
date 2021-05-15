<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;

    public function etapes(){

        return $this->hasMany(Etape::class);
    }

    public function ingredients(){

        return $this->hasMany(Ingredient::class);
    }

    public function categorie(){
        
        return $this->belongsTo(Categorie::class);
    }

    public function medias(){
        
        return $this->hasMany(Image::class);
    }
    public function comments(){
        
        return $this->hasMany(Comment::class);
    }

    public function returncategorie(){
        $categorie = null ; 
        $categorie = Categorie::find($this->categorie_id);
        return $categorie;
    
    }

    public function returnuser(){
        $cuisinier = null ; 
        $cuisinier = User::find($this->user_id);
        return $cuisinier;
    }
}
