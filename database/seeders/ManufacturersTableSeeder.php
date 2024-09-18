<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manufacturers')->insert([
            [
                'nama' => 'Toyota',
                'alamat' => 'Tokyo, Japan',
            ],
            [
                'nama' => 'Honda',
                'alamat' => 'Minato, Japan',
            ],
            [
                'nama' => 'Suzuki',
                'alamat' => 'Hamamatsu, Japan',
            ],
            [
                'nama' => 'Mitsubishi',
                'alamat' => 'Tokyo, Japan',
            ],
            [
                'nama' => 'Daihatsu',
                'alamat' => 'Osaka, Japan',
            ],
        ]);
    }
}
