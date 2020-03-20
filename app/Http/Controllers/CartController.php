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

    public function add(Request $request)
    {

        $request->validate([
            'id' => 'required',
            'quantity' => 'required',
        ]);

        //si cart n'existe pas en session
        if (!session()->exists('cart')) {
            //on crée le panier
            $cart[$request['id']] = $request['quantity'];
        } else {
            //si le penier existe on le récupre
            $cart = session()->get('cart');

            //on maj la quantitée
            if (isset($cart[$request['id']])) {
                $cart[$request['id']] += $request['quantity'];
            } else {
                $cart[$request['id']] = $request['quantity'];
            }
        }
        //on sauve dans la session le panier
        \session()->put('cart', $cart);

        return redirect()->route('cart.show');

    }

    private function cartCreate()
    {

        if (!session()->has('cart')) {
            session('cart', []);
        }
    }


}
