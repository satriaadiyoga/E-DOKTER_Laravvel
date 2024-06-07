<?php


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
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/data-dokter', [DokterController::class, 'index']);
Route::get('/data-pasien', [PasienController::class, 'index']);

// button edit

Route::get('/update-pasien/{id}', [PasienController::class, 'update']);
Route::get('/edit-pasien/{id}', [PasienController::class, 'edit']);
Route::get('/add-pasien', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/tambah-pasien', [PasienController::class, 'store'])->name('pasien.store');

// button hapus
Route::get('/hapus-pasien/{id}', [PasienController::class, "destroy"])->name('pasien.destroy');

Route::get('/pasien/cetak', [PasienController::class, 'cetak']);