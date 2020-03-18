<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class CartController extends Controller
{
    public function  addtocart(\http\Env\Request $request){
        $request->session()->put('id', 'quantity');
    }

    public function show(){
        return view('cart');
    }
}
