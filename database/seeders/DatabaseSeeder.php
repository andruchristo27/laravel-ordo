<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ManufacturersTableSeeder::class,
            CarsTableSeeder::class,
            FeaturesTableSeeder::class,
            CarFeatureTableSeeder::class,
        ]);
    }
}
