<?php

namespace Database\Factories;

use App\Models\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->company(),
            'description' => fake()->text(),
            'history' => fake()->paragraph(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'address' => fake()->address(),
            'speciality' => fake()->word(),
            'logo' => fake()->image(),
            'theme_id' => Theme::all()->random()->id
        ];
    }
}
