<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'title', 'image', 'price', 'category_id'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function allProducts()
    {
        return app(Pipeline::class)
        ->send(Product::query())
        ->through([
            \App\Filters\Title::class,
            \App\Filters\CategoryId::class,
        ])
        ->thenReturn()
        ->paginate(9);
    }
}
