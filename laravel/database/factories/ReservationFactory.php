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
        $endTime = now()->addDays(30)->toDateTimeString();

        $timestamp = fake()->dateTimeBetween($startTime, $endTime)->format('Y-m-d H:i:s');
        $timestamp = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestamp);

        $timestamp->setHour(random_int(18, 21));
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
