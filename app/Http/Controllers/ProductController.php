<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin_product');
    }

    public function store(Request $request)
    {
       $request->validate([
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'volume' => 'required',
            'vat' => 'required',
            'stock' => 'required',
            'weight' => 'required'
        ]);

        $product = new Product();
        $product->category_id = request('category');
        $product->name = request('name');
        $product->description = request('description');
        $product->price = request('price');
        $product->volume = request('volume');
        $product->vat = request('vat');
        $product->stock = request('stock');
        $product->weight = request('weight');
        $product->save();

        return redirect('admin/product');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Product $product
     * @return void
     */
    public function show(Product $product) {
        return view ('product', ['product'=> $product]);
    }

    public function cart($id)
    {

        $product = Product::find($id);
        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo
                ]
            ];

            session()->put('cart', $cart);
        }

    }
}
