<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Transaksi;
use App\Models\Pembeli;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMobilTerjual = Transaksi::count(); // Total number of transactions
        $totalMobilTersedia = Mobil::count();   // Total number of cars available
        $totalPelanggan = Pembeli::count();     // Total number of customers
        $totalTransaksi = Transaksi::count();   // Total number of transactions

        return view('admin.dashboard', compact(
            'totalMobilTerjual',
            'totalMobilTersedia',
            'totalPelanggan',
            'totalTransaksi'
        ));
    }
}
