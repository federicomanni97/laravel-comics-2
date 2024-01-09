<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class HomeController extends Controller
{
    //
    public function index(){
        $products = Comic::inRandomOrder()->limit(5)->get();
        return view ('home', compact('products'));
    }
}
