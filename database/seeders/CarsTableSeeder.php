<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'nama' => 'Toyota Avanza',
                'jenis' => 'MPV',
                'harga' => 200000000,
                'tanggal_pembuatan' => '2020-01-15',
                'manufacturer_id' => 1,
            ],
            [
                'nama' => 'Honda Civic',
                'jenis' => 'Sedan',
                'harga' => 350000000,
                'tanggal_pembuatan' => '2019-05-20',
                'manufacturer_id' => 2,
            ],
            [
                'nama' => 'Suzuki Swift',
                'jenis' => 'Hatchback',
                'harga' => 180000000,
                'tanggal_pembuatan' => '2021-08-10',
                'manufacturer_id' => 3,
            ],
            [
                'nama' => 'Mitsubishi Pajero',
                'jenis' => 'SUV',
                'harga' => 550000000,
                'tanggal_pembuatan' => '2018-11-30',
                'manufacturer_id' => 4,
            ],
            [
                'nama' => 'Daihatsu Xenia',
                'jenis' => 'MPV',
                'harga' => 210000000,
                'tanggal_pembuatan' => '2022-02-14',
                'manufacturer_id' => 5,
            ],
        ]);
    }
}
