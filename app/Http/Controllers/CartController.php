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
        $cartview= [];
        $totalprice=0;
        if (!empty($cart)){
            foreach ($cart as $key=>$value){
                $product=Product::where('id', $key)->first();
                $product->quantity=$value;
                $totalprice+= $product->price * $value;
                array_push($cartview,$product);
            }
        }
        return view('cart', ['cart' => $cartview, 'total'=>$totalprice]);
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
            $cart[$request->input('id')] = $request->input('quantity');
        } else {
            //si le penier existe on le récupre
            $cart = session()->get('cart');

            //on maj la quantitée
            if (isset($cart[$request->input('id')])) {
                $cart[$request->input('id')] += $request->input('quantity');
            } else {
                $cart[$request->input('id')] = $request->input('quantity');
            }
        }
        //on sauve dans la session le panier
        session()->put('cart', $cart);

        return redirect()->route('cart.show');

    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required',
            'quantity' => 'required',
        ]);
        $cart = session()->get('cart');
        $cart[$request->input('id')] = $request->input('quantity');
        session()->put('cart', $cart);
        return redirect()->route('cart.show');
    }

    public function remove(Request $request){
        $request->validate([
            'id' => 'required',
        ]);
        $cart = session()->get('cart');
        unset($cart[$request->input('id')]);
        session()->put('cart', $cart);
        return redirect()->route('cart.show');
    }

    public function validate(Request $request, array $rules,
                             array $messages = [], array $customAttributes = []){
        $cart = session()->get('cart');
        $cartview= [];
        $totalprice=0;
        if (!empty($cart)){
            foreach ($cart as $key=>$value){
                $product=Product::where('id', $key)->first();
                $product->quantity=$value;
                $totalprice+= $product->price * $value;
                array_push($cartview,$product);
            }
        }
    }


    private function cartCreate()
    {

        if (!session()->has('cart')) {
            session('cart', []);
        }
    }


}
