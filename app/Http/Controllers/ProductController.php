<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
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
}
