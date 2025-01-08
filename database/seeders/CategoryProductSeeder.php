<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentMaxPosition = Category::max('position') ?? 0;

        $categories = [];
        for ($i = 1; $i <= 5; $i++) {
            $category = Category::create([
                'name' => fake()->name,
                'enabled' => fake()->boolean(),
                'position' => $currentMaxPosition + $i, // Increment Position value
            ]);
            $categories[] = $category; // Store the created category for later use
        }

        // Create 10 products for each newly created category
        foreach ($categories as $category) {
            Product::factory(10)->create(['category_id' => $category->id]);
        }
    }
}
