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
        $startTime = now()->toDateTimeString();
        // Set the end time to the current time plus 30 days
        $endTime = now()->addDays(30)->toDateTimeString();

        // Generate a random timestamp between current time and end time
        $timestamp = fake()->dateTimeBetween($startTime, $endTime)->format('Y-m-d H:i:s');
        $timestamp = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestamp);

        // Set the hour to be between 18:00 and 22:00
        $timestamp->setHour(random_int(18, 21)); // Random hour between 18 and 21
        // Set the minutes to be either 00 or 30 for the 30-minute increment
        $timestamp->setMinute(random_int(0, 1) * 30);

        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'timestamp' => $timestamp,
            'notes' => fake()->text(),
            'table_id' => fake()->numberBetween(1, 5)
        ];
    }
}
