<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        //$product = Product::all();
        return view('home'); //['products' => $products])
    }
}
