<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(Request $request){
        $data = $request->session()->all();
        dd($data);
        return view('cart');
    }

}
