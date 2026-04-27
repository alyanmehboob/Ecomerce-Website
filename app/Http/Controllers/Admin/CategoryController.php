<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Nette\Utils\Paginator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{


    public function category()
    {
        return view('admin_panel/addCategory');
    }

    public function category_insert_data(Request $request)
    {
        $request->validate([
            'categoryName' => 'required',
            'status' => 'required|in:active,inactive',
            'description' => 'required'
        ]);

        $category = new Category();
        $category->emp_id = rand(10000, 99999);
        $category->category_name =  ucfirst($request->categoryName);
        $category->slug_url = Str::slug($request->categoryName);
        $category->status = $request->status;
        $category->description = $request->description;
        $category->save();

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function category_select_data()
    {

        $categories = Category::latest()->paginate(5);
        return view('admin_panel/viewCategory', compact('categories'));
    }

    public function delete_category($id)
    {
        $category = category::find($id);

        if ($category) {
            $category->delete();
            return redirect()->back()->with('success', 'category Deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Record not found');
        }
    }

    public function edit($id)
    {
        $editcategory = Category::find($id);
        return view('admin_panel/addCategory', compact('editcategory'));
    }

    public function update(Request $request, $id)
    {

        $category = Category::findOrFail($id);
        $category->category_name = ucwords($request->categoryName);
        $category->status = $request->status;
        $category->description = $request->description;
        $category->save();
        return redirect('viewcategory')->with('success', 'category update success');
    }

    public function product_insert_data(Request $request)
    {
        $request->validate([
            'productName' => 'required',
            'price' => 'required',
            'selectCategory' => 'required',
            'stockQuantity' => 'required',
            // 'productImage' => 'required',
            'description' => 'required'
        ]);

        
        $product = new Product();
     
        $product->product_name = $request->productName;
        $product->price = $request->price;
        $product->slug_url = Str::slug($request->productName);
        // $product->category_name = $request->selectCategory;
        $product->emp_id = $request->selectCategory;
        $product->stock_quantity = $request->stockQuantity;
        // $product->product_image = $request->productImage;
        $product->description = $request->description;
        $product->save();

        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function product()
    {
        $category = Category::all(); // ye missing hai
        return view('admin_panel/addProduct', compact('category'));
    }

    public function viewproduct()
    {
        $product = Product::latest()->paginate(5);
        return view('admin_panel/viewProduct', compact('product'));
    }

    public function delete_product($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return redirect()->back()->with('success', 'Deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Record not found');
        }
    }



    public function edit_product($id)
    {
        $product = Product::findOrFail($id); // single
        $category = Category::with('getcategory')->get(); // collection

        return view('admin_panel.addProduct', compact('product', 'category'));
    }

    public function update_product(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $product->product_name = $request->productName;
        $product->category_name = $request->selectCategory;
        $product->price = $request->price;
        $product->stock_quantity = $request->stockQuantity;
        $product->description = $request->description;
        $product->save();

        return redirect('viewproduct')->with('success', 'Product Updated Successfully');
    }
}
