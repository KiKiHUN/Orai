<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\City::factory(50)->create();
         \App\Models\Airlines::factory(25)->create();
         \App\Models\Flight::factory(500)->create();
         \App\Models\City_Flight::factory(1000)->create();
         \App\Models\Passanger::factory(5000)->create();
    }
}
