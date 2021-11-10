<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
}
