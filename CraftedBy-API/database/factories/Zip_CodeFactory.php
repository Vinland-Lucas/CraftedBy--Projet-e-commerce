<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Address; // Don't forget to include this line to use 'Address::postcode()'

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zip_Code>
 */
class Zip_CodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => Address::postcode() // postcode of the address class which always returns 5 digits
        ];
    }
}
