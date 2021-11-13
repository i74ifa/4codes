<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\DashboardSetting;
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
            'details' => 'required',
            'image' => 'nullable|file'
        ]);
        // dd($request->input());
        $file = $request->file('image')->store('products');

        Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'details' => $request->details,
            'category_id' => $request->category_id,
            'image' => $file,
        ]);

        return back();


    }

    public function all()
    {
        $products = Product::allProducts();
        $popular = Product::whereIn('id',
        json_decode(DashboardSetting::setting('popular_product')->data)
        )->get();
        $categories = Category::all();

        return view('welcome', compact('products', 'categories', 'popular'));
    }

    public function delete($id)
    {
        // Product::find($id)->delete();

        return response()->json([
            'status' => __('delete Success')
        ]);
    }

    public function createShow()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function search(Request $request)
    {
        $title = $request->title;
        return Product::where('title', 'LIKE', "%$title%")->limit(10)->get();

    }
}
