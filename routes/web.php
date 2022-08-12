<?php

use App\Http\Controllers\DaftarAnggotaController;
use App\Http\Controllers\DaftarBukuController;
use App\Http\Controllers\DaftarPeminjamanBukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditAnggotaController;
use App\Http\Controllers\TambahAnggotaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'Dashboard']);

Route::get('/daftarBuku', [DaftarBukuController::class, 'DaftarBuku']);

Route::get('/daftarAnggota', [DaftarAnggotaController::class, 'DaftarAnggota']);

Route::get('/daftarPeminjamanBuku', [DaftarPeminjamanBukuController::class, 'DaftarPeminjamanBuku']);

Route::get('/tambahAnggota', [TambahAnggotaController::class, 'TambahAnggota']);

Route::get('/editAnggota', [EditAnggotaController::class, 'EditAnggota']);