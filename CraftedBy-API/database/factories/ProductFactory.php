<?php

namespace Database\Factories;

use App\Models\Business;
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
        $business_id = Business::all('id')->random();

        return [
            'business_id' => $business_id,
            'name' => fake()->word(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 0, 500),
            'size' => fake()->numerify('Width: ##cm / Height: ##cm / Depth: ##cm / Capacity: ##L'),
            'category' => fake()->word(),
            'material' => fake()->word(),
            'style' => fake()->word(),
            'color' => fake()->colorName(),
            'image' => fake()->image(),
            'active' => fake()->boolean(),
            'stock_quantity' => fake()->randomNumber(2, false)
        ];
    }
}
