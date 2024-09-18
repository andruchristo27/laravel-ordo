<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function hello()
    {
        return 'hello world';
    }

    public function perkalian($angka)
    {
        return $angka * 2;
    }

    public function tambah(Request $request)
    {
        $validated = $request->validate([
            'angka1' => 'required|numeric',
            'angka2' => 'required|numeric',
        ]);

        $angka1 = $request->input('angka1');
        $angka2 = $request->input('angka2');
        $hasil = $angka1 + $angka2;

        return view('view', compact('hasil'));
    }

    public function insertCar()
    {
        DB::table('cars')->insert([
            'nama' => 'Toyota Corolla',
            'jenis' => 'Sedan',
            'harga' => 20000.00,
            'tanggal_pembuatan' => '2024-09-01',
        ]);

        return 'Data berhasil disimpan.';
    }

    public function showCarWhereHarga20000()
    {
        $mobil = DB::table('cars')
            ->where('harga', '=', 20000)
            ->get();

        return $mobil;
    }
}
