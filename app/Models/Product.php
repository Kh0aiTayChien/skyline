<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function imageproducts()
    {
        return $this->hasMany(ImageProduct::class)->onDelete('cascade');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
