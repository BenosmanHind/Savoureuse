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

   

    public function rating(){
      
        $rating = 0 ;
        $i = 0 ;
        foreach($this->comments as $comment){
           $rating = $rating + (int)$comment->star;
           $i = $i +1 ; 
        }
        
        if($i > 0){
           $rating = $rating / $i ;
        }
        
        return intval($rating);
     }


     
    public function return_image(){
     

    

        $image = null ; 
        $image = Image::where('recette_id',$this->id)->first();
        return $image;
      
       
     
     }


}
