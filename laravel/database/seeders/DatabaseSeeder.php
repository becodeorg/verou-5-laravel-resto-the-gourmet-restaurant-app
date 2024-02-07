<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Reservation;
use App\Models\Table;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Table::factory(5)->create();
        Reservation::factory(10)->create();

        User::factory()->create([
            'name' => 'Kelsey',
            'email' => 'kelsey@thegourmet.com',
            'password' => 'opensesame'
        ]);
    }
}
