<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show($category){
        return view ('categories', ['category'=>$category]);
    }
}