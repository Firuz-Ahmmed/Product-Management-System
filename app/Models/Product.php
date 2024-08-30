<?php

namespace App\Models;

use App\Models\Feature;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['name', 'image', 'user_id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products', 'product_id', 'category_id');
    }
    public function features()
    {
        return $this->hasMany(Feature::class);
    }

}
