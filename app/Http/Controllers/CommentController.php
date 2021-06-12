<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Recette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    //
   
    public function index(){
        $comments = Comment::all();
        for($i = 1; $i < 13; $i++) {
            $nbr = Recette::whereMonth('created_at', $i)->count();
            $values[$i] = $nbr;

        }
        return view('comments',compact('comments','values'));
    }

    public function store(Request $request){
     
    $comment = new Comment();
    if($request['rating'] == null){
        $comment->star = "0";
       
    }
    else{
        $comment->star = $request['rating'];
    }
    $comment->name = $request['name'];
    $comment->comment = $request['comment'];
    $comment->recette_id = $request['recette_id'];
    $comment->save();
    
    return Redirect::back();
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        
        $comment->delete();
 
        return redirect('comments');
    }
}
