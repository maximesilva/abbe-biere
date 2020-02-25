<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $date = Carbon::parse('2020-02-25');

        return view('home', ['date' => $date]);
    }
}
