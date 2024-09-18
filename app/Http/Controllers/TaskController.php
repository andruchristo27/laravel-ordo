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
        $angka1 = $request->query('angka1');
        $angka2 = $request->query('angka2');

        if (is_numeric($angka1) && is_numeric($angka2)) {
            $hasil = $angka1 + $angka2;

            return view('view', [
                'angka1' => $angka1,
                'angka2' => $angka2,
                'hasil' => $hasil,
            ]);
        }

        return view('view');
    }
}
