<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\admin\Product; 
use Illuminate\Http\Request;

class Shop extends Controller
{
    public function shop()
    {
        $category = Category::all();
        $products = Product::all();
        return view('shop', compact('category', 'products'));
    }


    public function category_filter($slugurl)
    {
        $category = Category::where('category_name', $slugurl)->first();
        $products = Product::where('category_name', $category->category_name)->get();
        return view('category_product_filter', compact('products'));
    }
}
