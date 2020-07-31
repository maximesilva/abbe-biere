<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(){
        if (session()->exists('admin')){
            return redirect(route('admin.home'));
        } else {
            $products = Product::all();
            //dd($products);
            return view('home', ['products' => $products]);
        }
    }

}
