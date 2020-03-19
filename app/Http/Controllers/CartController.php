<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function show(Request $request, Product $product)
    {
        Product::find($product);
        \Session::push('cart', $product);
        $cart = $request->session()->get('cart');
        dd($cart);
        return view('cart');
    }



}
