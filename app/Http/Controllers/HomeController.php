<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        //dd($products);
        return view('home', ['products' => $products]);
    }

    public function show(){
        return view('home');
    }
}
