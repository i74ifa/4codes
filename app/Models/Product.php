<?php

namespace App\Models;

use App\Sending;
use Facade\FlareClient\View;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;
use Parsedown;
class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'title', 'price', 'category_id', 'details'
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
            \App\Filters\DefaultSort::class,
        ])
        ->thenReturn()
        ->paginate(12);
    }

    public function sending()
    {
        return (new Sending)->url([
            'title' => $this->title,
            'id' => $this->id
        ]);
    }

    public function parseDetails()
    {
        return Parsedown::instance()->text($this->details);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class)->where('rank', 0);
    }

    public function views()
    {
        return $this->hasMany(Viewer::class);
    }
}
