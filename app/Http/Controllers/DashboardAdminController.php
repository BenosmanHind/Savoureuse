<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Recette;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use League\CommonMark\Inline\Element\Code;

class DashboardAdminController extends Controller
{
    //
    public function index(){
        $cuisiniers = User::where('type', 1)->count();
        $comments = Comment::all();
        $countcomment = $comments->count();
        $recettes = Recette::all(); 
        $countrecette = $recettes->count();
        
        return view ('home-dashboard-admin',['cuisiniers' => $cuisiniers , 'countrecette' => $countrecette , 'countcomment' => $countcomment]);
    }
}
