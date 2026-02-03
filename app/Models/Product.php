<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;

    /**
     * fillable
     */
    protected $fillable = ['name', 'slug', 'category_id', 'image', 'price', 'qty'];

    /**
     * accessor image product
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => asset('/storage/products/' . $image),
        );
    }

    /**
     * relation to categories table
     */
    public function category()
    {
        return $this->belongsTo(Product::class);
    }
}
