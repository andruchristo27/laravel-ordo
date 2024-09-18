<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [TaskController::class, 'hello']);
Route::get('/perkalian/{angka}', [TaskController::class, 'perkalian']);
Route::get('/tambahMobil', [TaskController::class, 'insertCar']);
Route::get('/mobil', [TaskController::class, 'showCarWhereHarga20000']);
