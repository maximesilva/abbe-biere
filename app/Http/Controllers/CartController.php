<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class CartController extends Controller
{

    public function show()
    {
        $cart = session('cart');
        return view('cart', ['cart' => $cart]);
    }

    public function add($id, $quantity)
    {
        $this->cartCreate();
        $cart = session('cart');

        if (isset($cart[$id])) {
            $cart[$id] += $quantity;
        } else {
            $cart[$id] = $quantity;
        }
        session('cart', $cart);

    }

    private function cartCreate()
    {

        if (!session()->has('cart')) {
            session('cart', []);
        }
    }


}
