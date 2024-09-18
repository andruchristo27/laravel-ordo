<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_feature')->insert([
            ['car_id' => 1, 'feature_id' => 1],
            ['car_id' => 1, 'feature_id' => 2],
            ['car_id' => 2, 'feature_id' => 3],
            ['car_id' => 3, 'feature_id' => 4],
            ['car_id' => 4, 'feature_id' => 5],
            ['car_id' => 5, 'feature_id' => 1],
        ]);
    }
}
