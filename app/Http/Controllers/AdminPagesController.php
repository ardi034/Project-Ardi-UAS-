<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Transaksi;
use App\Models\Pembeli;
use App\Models\Credit;

class AdminPagesController extends Controller
{
    public function index()
    {
        // Fetch data from the respective tables
        $mobils = Mobil::all();
        $transaksis = Transaksi::all();
        $pembelis = Pembeli::all();
        $credits = Credit::all();

        // Pass data to the view
        return view('admin.pages.index', compact('mobils', 'transaksis', 'pembelis', 'credits'));
    }
}

