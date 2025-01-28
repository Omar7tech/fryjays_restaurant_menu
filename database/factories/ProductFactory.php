<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->sentence(2),
            'description' => $this->faker->sentence(12),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'small' => $this->faker->optional()->randomFloat(2, 1, 100),
            'large' => $this->faker->optional()->randomFloat(2, 1, 100),
            'new_price' => $this->faker->optional()->randomFloat(2, 1, 100),
            'preparation_time' => $this->faker->numberBetween(5, 120), // Preparation time in minutes
            'image' => $this->faker->optional()->imageUrl(),
            'category_id' => null,
            'enabled' => $this->faker->boolean(),
            'new' => $this->faker->boolean(),
            'top_seller' => $this->faker->boolean(),
            'spicy' => $this->faker->boolean(),
            'vegetarian' => $this->faker->boolean(),
            'design' => $this->faker->numberBetween(1 , 2),
            'position' => $this->faker->unique()->numberBetween(0, 1000),
        ];
    }
}
