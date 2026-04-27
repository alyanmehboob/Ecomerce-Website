<?php

namespace App\Http\Controllers;

use App\Models\admin\Product;
use Illuminate\Http\Request;

class Product_detail extends Controller
{
    public function product_detail($slugurl)
    {
        $product = Product::where('slug_url',$slugurl)->first();
        
        return view('detail',compact('product'));
    }
}
