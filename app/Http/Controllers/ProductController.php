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
    public function all()
    {
        $products = Product::allProducts();
        $popular = Product::whereIn('id',
        json_decode(DashboardSetting::setting('popular_product')->data)
        )->get();
        $categories = Category::all();

        return view('welcome', compact('products', 'categories', 'popular'));
    }


}
