<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Recette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    //
    /*
    public function index(){
        $comments = Comment::all();
        return view('recettedetail',compact('comments'));
    }
*/
    public function store(Request $request){

    $comment = new Comment();
    $comment->name = $request['name'];
    $comment->comment = $request['comment'];
    $comment->recette_id = $request['recette_id'];
    
    $comment->save();
    
    return Redirect::back();
    }
}
