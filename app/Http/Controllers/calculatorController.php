<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatorController extends Controller
{
    public function index(Request $request)
    {
        $premierevariable =   $request ->input('premierevariable');
        $secondevariable =   $request ->input('secondevariable');
        $operateur  =   $request -> input('operateur');
        $resultat=0;
        if ( $operateur =='+'){
            $resultat=  $premierevariable+ $secondevariable;
        }
        elseif($operateur =='-'){
            $resultat=  $premierevariable - $secondevariable;
        }
        elseif($operateur =='*'){
            $resultat=  $premierevariable* $secondevariable;
        }
        elseif($operateur =='/'){
            $resultat=  $premierevariable / $secondevariable;
        }
        else   $resultat=0;
        echo    $resultat;
    }
}
