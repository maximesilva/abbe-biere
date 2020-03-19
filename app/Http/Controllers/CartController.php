<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class CartController extends Controller
{
    //public function  addToCart(\http\Env\Request $request){
        //$request->session()->put('id', 'quantity');
       // $request->session()->put('piano',$panier)
            //$_SESSION['piano']=$panier
    //}

    public function show(){
        return view('cart');
    }
}
