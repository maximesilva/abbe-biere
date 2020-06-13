<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        if (session()->exists('admin')) {
            return view('admin_product');
        } else {
            return redirect(route('home.show'));
        }
    }

    public function create()
    {
        if (session()->exists('admin')) {
            return view('admin_product');
        } else {
            return redirect(route('home.show'));
        }
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
    public function show(Product $product)
    {
        return view('product', ['product' => $product]);
    }

}
