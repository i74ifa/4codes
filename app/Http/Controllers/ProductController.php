<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'price' => 'integer|required',
            'category_id' => 'required',
            'image' => 'nullable|file'
        ]);


        $file = $request->file('image')->store('products');



        Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' => $file,
        ]);


        return back();


    }

    public function all()
    {
        $products = Product::allProducts();
        $categories = Category::all();

        return view('welcome', compact('products', 'categories'));
    }

    public function delete($id)
    {
        // Product::find($id)->delete();


        return response()->json([
            'status' => __('delete Success')
        ]);
    }
}
