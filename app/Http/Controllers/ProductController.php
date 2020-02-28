<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function show($id){
        return view ('product', ['id'=> $id]);
    }


}
