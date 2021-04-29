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
        
        return $this->hasMany(Media::class);
    }
}
