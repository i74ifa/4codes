<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\DashboardSetting;
use App\Models\Image;
use App\Models\Product;

class ProductController extends Controller
{
    public function all()
    {
        $products = Product::allProducts();
        return view('dashboard.product.all', compact('products'));
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
        return Product::where('title', 'LIKE', "%$title%")->limit(10)->with('image')->get();
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'price' => 'integer|required',
            'category_id' => 'required',
            'details' => 'required',
            'image' => 'nullable'
        ]);
        $product = Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'details' => $request->details,
            'category_id' => $request->category_id,
        ]);


        foreach ($request->file('image') as $file) {
            $image = new Image();
            $file = $file->store('products');
            $image->path = $file;
            $image->product_id = $product->id;

            $image->save();
        }
        return back();


    }
}
