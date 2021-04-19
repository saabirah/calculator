<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addition;
use Illuminate\Support\Facades\Session;

class AdditionController extends Controller
{

    public function affiche(){
        $sommes=Addition::all();
          return view('calculator', compact('sommes'));
      }
    public function ajout(Request $request){

        $data=  request()->validate([
              'first'=> ['required','numeric'],
              'second'=> ['required','numeric'],

            ]);

           $plus=$data['first']+$data['second'];
            Addition::create([
              'first'=>$request->first,
              'second'=>$request->second,
              'somme' =>$plus,
          ]);
          Session::flash('message', 'operation effectuée avec avec succes!');
          Session::flash('alert-class', 'alert-success text-center');
          return redirect()->back();
      }

      public function supprimer(Addition  $somme){
        $somme->delete();
        Session::flash('messag', 'opération excécutée  avec succes!');
        Session::flash('alert-class', 'alert-info text-center');
        return redirect()->back();
}


}
