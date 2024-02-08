<?php

namespace Database\Factories;

use Carbon\Carbon;
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
        $timestamp = Carbon::createFromFormat('Y-m-d H:i:s', $timestamp);

        $times = ["18:00", "19:30", "21:00"];
        $randomTime = $times[random_int(0, 2)];
        $timestamp->setTime(explode(':', $randomTime)[0] , explode(':', $randomTime)[1]);

        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'timestamp' => $timestamp,
            'notes' => fake()->text(),
            'table_id' => fake()->numberBetween(1, 5)
        ];
    }
}
