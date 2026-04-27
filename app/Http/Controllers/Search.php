<?php

namespace App\Http\Controllers;
use App\Models\admin\Product;
use Illuminate\Http\Request;
class Search extends Controller
{

    public function search(Request $request)
    {
        
        $request->validate([
            'search' => 'required'
        ]);
        $query = trim($request->input('search'));

        // ✅ empty search rok do
        if (!$query) {
            return redirect()->back();
        }

        $search_products = Product::where('product_name', 'LIKE', "%{$query}%")
            ->paginate(10)
            ->appends(['search' => $query]);

        return view('navbar_search', compact('search_products', 'query'));
    }
}
