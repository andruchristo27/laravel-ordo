<?php

namespace App\Http\Controllers;

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
}
