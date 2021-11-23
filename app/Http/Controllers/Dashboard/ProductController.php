<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\DashboardSetting;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function all()
    {
        $products = Product::allProducts();
        return view('dashboard.product.all', compact('products'));
    }

    public function delete($id)
    {
        Product::find($id)->delete();

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

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }


    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);


        // delete from image
        foreach ($product->images as $i) {
            if (!array_key_exists($i->id, $request->images)) {
                Storage::delete($i->path);
                Image::findOrFail($i->id)->delete();
            }
        }

        if ($request->file('image')) {
            $this->addFile($request->file('image'), $id);
        }

        $requestData = $request->all();
        if (isset($requestData['images']))
            unset($requestData['images']);

        $product->update($requestData);

        return back()->with('status', __('Success'));
    }

    protected function addFile($files, $id):void
    {
        foreach ($files as $file) {
            $image = new Image();
            $file = $file->store('products');
            $image->path = $file;
            $image->product_id = $id;
            $image->save();
        }
    }
}
