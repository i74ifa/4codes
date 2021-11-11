<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $d = Category::create($data);
        return back()->with('status', __("Added Success"));
    }

    public function show()
    {
        return view('category.create');
    }

    public function all()
    {
        $categories = Category::all();

        return view('category.all', compact('categories'));
    }


    public function byId($id)
    {
        $products = Product::allProducts();
        return view('category.filter-id', compact('products', 'id'));
    }
}
