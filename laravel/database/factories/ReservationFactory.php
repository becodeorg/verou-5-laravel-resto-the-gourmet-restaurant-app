<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $today = now()->toDateTimeString();
        $futureDateTime = now()->addDays(rand(1, 30))->toDateTimeString(); 

        return [
            'name' => fake()->name(),
            'email' =>fake()->email(),
            'timestamp' =>fake()->dateTimeBetween($today, $futureDateTime),
            'notes' =>fake()->text(),
            'table_id' =>fake()->numberBetween(1, 5)
        ];
    }
}
