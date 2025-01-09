<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelMobilController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KreditController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;


//router Mobil//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/model-mobil', [ModelMobilController::class, 'index'])->name('model.index');
Route::get('/model-mobil/{id}', [ModelMobilController::class, 'show'])->name('model.show');



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//router pembeli//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/pembeli', [PembeliController::class, 'index'])->name('pembeli.index');
Route::get('/pembeli/create', [PembeliController::class, 'create'])->name('pembeli.create');
Route::post('/pembeli', [PembeliController::class, 'store'])->name('pembeli.store');
Route::delete('/pembeli/{id}', [PembeliController::class, 'destroy'])->name('pembeli.destroy');
Route::get('pembeli/{id}', [PembeliController::class, 'show'])->name('pembeli.show');
Route::get('pembeli/{id}/edit', [PembeliController::class, 'edit'])->name('pembeli.edit');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//router transaksi//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/Transaksi', [TransaksiController::class, 'index']);
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/nama-tabel/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show'); // Rute show
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
// Route untuk mengedit transaksi
Route::get('transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//router kredit//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/kredit', [KreditController::class, 'index']);
Route::get('/kredit', [KreditController::class, 'index'])->name('kredit.index');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//router Dashboard//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/', function () {
    return view('dashboard');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/home', [HomeController::class, 'index'])->name('home');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////