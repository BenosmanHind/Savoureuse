<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class CuisinierController extends Controller
{
    //

    public function index(){


        $cuisiniers = User::where('type', 1)->get();
        for($i = 1; $i < 13; $i++) {
            $nbr = Recette::whereMonth('created_at', $i)->count();
            $values[$i] = $nbr;

        }
        return view('cuisiniers',compact('cuisiniers','values'));
   }
   public function destroy($id)
   {
       $cuisinier = User::find($id);
       
       $cuisinier->delete();

       return redirect('cuisiniers');
   }

   public function detail(Request $request,$id){

    $cuisinier = User::find($id);
    $recettes = Recette::where('user_id',$request->id)->get();
    
    return view('detail_cuisinier',['cuisinier'=>$cuisinier,'recettes'=>$recettes]);

   
}
public function search()
{ 

    
  $search_text=$_GET['query'];
 $cuisinier = User::where('name','LIKE','%'.$search_text.'%')->where('type',1)->get();
 for($i = 1; $i < 13; $i++) {
    $nbr = Recette::whereMonth('created_at', $i)->count();
    $values[$i] = $nbr;

}
   return view('search',['cuisinier'=>$cuisinier,'values'=>$values]);

}

}
