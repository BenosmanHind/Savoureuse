<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class CuisinierController extends Controller
{
    //

    public function index(){


        $cuisiniers = User::where('type', 1)->get();
        return view('cuisiniers',compact('cuisiniers'));
   }
   public function destroy($id)
   {
       $cuisinier = User::find($id);
       
       $cuisinier->delete();

       return redirect('cuisiniers');
   }

   public function detail($id){

    $cuisinier = User::find($id);
    
    
    return view('detail_cuisinier',['cuisinier'=>$cuisinier]);

   

}
public function search()
{
  $search_text=$_GET['query'];
   $cuisinier = User::where('name','LIKE','%'.$search_text.'%')->get();
   return view('search',['cuisinier'=>$cuisinier]);
}
}
