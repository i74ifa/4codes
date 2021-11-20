<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Viewer;
use App\Sending;
use Illuminate\Http\Request;

class ViewerController extends Controller
{
    public function order($id)
    {
        $user_id = request()->user()->id ?? 0;
        $product = Product::find($id);
        Viewer::create([
            'product_id' => $id,
            'user_id' => $user_id
        ]);

        $send = (new Sending)->url([
            'title' => $product->title,
            'id' => $product->id
        ]);

        return redirect($send);
    }
}
