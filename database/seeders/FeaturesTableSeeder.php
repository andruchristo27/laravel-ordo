<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            ['feature_name' => 'Seat Heater'],
            ['feature_name' => 'Parking Camera'],
            ['feature_name' => 'Remote Key'],
            ['feature_name' => 'Bluetooth Audio'],
            ['feature_name' => 'Cruise Control'],
        ]);
    }
}
