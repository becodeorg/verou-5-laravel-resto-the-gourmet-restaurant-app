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
            'category' => fake()->word(),
            'name' =>fake()->name(),
            'price' =>fake()->randomFloat(),
            'has_alcohol' =>fake()->boolean(),
            'allergies' =>fake()->numberBetween(1, 5)
        ];
    }
}
