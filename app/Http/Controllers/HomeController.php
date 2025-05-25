<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $products = Product::all();
        return view( 'app.frontend.index', compact('products') );
    }
    
}
