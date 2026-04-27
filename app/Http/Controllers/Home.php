<?php

namespace App\Http\Controllers;

use App\Models\admin\Product;
use Illuminate\Http\Request; 

class Home extends Controller
{
    public function home()
    {

        $products = Product::take(9)->get();
        return view('home', compact('products'));
    }
}
