<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category){
        $products=$category->products;
        return view ('categories', ['products'=>$products]);
    }
}
