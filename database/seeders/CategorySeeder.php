<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use App\Models\admin\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 20; $i++) {
            Category::create([
                'category_name' => fake()->name(),
                'slug_url' => fake()->slug(),
                'status' => 'active',
                'description' => fake()->sentence()
            ]);
        }

        for ($i = 0; $i < 20; $i++) {
            Product::create([
                'product_name' => fake()->name(),
                'category_name' => fake()->name(),
                'price' => fake()->numberBetween(1000, 9000),
                'stock_quantity' => fake()->numberBetween(2, 5),
                'description' => fake()->sentence()

            ]);
        }
    }
}
