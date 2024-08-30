<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryProduct::create([
            'category_id' => 1,
            'product_id' => 1,
        ]);
        CategoryProduct::create([
            'category_id' => 2,
            'product_id' => 1,
        ]);


    }
}
