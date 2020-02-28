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

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'volume' => 'required',
            'vat' => 'required',
            'stock' => 'required',
            'weight' => 'required'
        ]);

        $product = new Product();
        $product->name = request('name');
        $product->description = request('description');
        $product->price = request('price');
        $product->volume = request('volume');
        $product->vat = request('vat');
        $product->stock = request('stock');
        $product->weight = request('weight');
        $product->save();
dd($product);
        return redirect('admin/product');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function show($id){
        return view ('product', ['id'=> $id]);
    }


}
