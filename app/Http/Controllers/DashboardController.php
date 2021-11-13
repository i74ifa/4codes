<?php

namespace App\Http\Controllers;

use App\Models\DashboardSetting;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public $setting_type = 'popular_product';
    public function settings()
    {
        $items = DashboardSetting::setting($this->setting_type);
        $items = json_decode($items->data);
        $products= Product::whereIn('id', $items);
        return view('dashboard.settings', [
            'products' => $products,
            'items' => implode(", ", $items)
        ]);
    }

    public function changeLogo(Request $request)
    {
        $name = 'project_logo';
        $file = $request->file('logo');
        $file = $request->file('logo')->storeAs('public', 'logo.png');

        return back()->with('status', __('file saved'));
    }


    public function popularProduct(Request $request)
    {
        $products = json_encode($request->data);
        $popular_product = DashboardSetting::where('type', 'popular_product')->first();
        if ($popular_product) {
            $popular_product->data = $products;
            $popular_product->save();
        } else {
            DashboardSetting::create([
                'type' => 'popular_product',
                'data' => $products,
            ]);
        }
        return response()->json(['status' => 'success']);
    }

    protected function convertJson($json)
    {

    }
}
