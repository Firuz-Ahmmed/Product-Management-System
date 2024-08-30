<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Test User',
            'image' => '/placeholder.png',
            'user_id' => 1,
        ]);
        Product::create([
            'name' => 'Test Product',
            'image' => '/placeholder.png',
            'user_id' => 1,
        ]);

    }
}
