<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
