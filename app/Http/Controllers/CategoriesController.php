<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category){
        $category->products;
        $category = Product::where('category_id', );
        return view ('categories', ['category'=>$category]);
    }
}
