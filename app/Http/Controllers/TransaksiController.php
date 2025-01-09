<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\ModelMobil;
use App\Models\Pembeli;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::with(['modelMobil', 'pembeli'])->get();
        return view('transaksi.index', compact('transaksis'));
    }

        // Menampilkan form
        public function create()
        {
            // Fetch all Pembeli and ModelMobil
            $pembelis = Pembeli::all();
            $mobils = ModelMobil::all(); // Correctly fetch all ModelMobil entries
        
            // Pass the variables to the view
            return view('transaksi.create', compact('pembelis', 'mobils')); // Pass both variables
        }
            // Menyimpan data
            public function store(Request $request)
            {
                // Validate the request data
                $validated = $request->validate([
                    'pembeli_id' => 'required|exists:pembelis,id',
                    'mobil_id' => 'required|exists:model_mobils,id',  // Make sure to reference the correct table
                    'tanggal_transaksi' => 'required|date',
                ]);
        
                // Create the new transaction
                Transaksi::create([
                    'pembeli_id' => $validated['pembeli_id'],
                    'mobil_id' => $validated['mobil_id'],
                    'tanggal_transaksi' => $validated['tanggal_transaksi'],
                ]);
        
                // Redirect back to the index with a success message
                return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil disimpan!');
            }
            public function show($id)
            {
                // Find the transaction by ID
                $transaksi = Transaksi::find($id);
        
                // If not found, return a 404 error
                if (!$transaksi) {
                    abort(404, 'Transaksi tidak ditemukan');
                }
        
                // Pass the transaction and related data to the view
                return view('transaksi.show', compact('transaksi'));
            }

            public function edit($id)
            {
                $transaksi = Transaksi::findOrFail($id);
                return view('transaksi.edit', compact('transaksi'));
            }
}
