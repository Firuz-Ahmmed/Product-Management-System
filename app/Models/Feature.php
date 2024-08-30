<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = ['description', 'product_id'];

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
