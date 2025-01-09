<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;
use App\Models\ModelMobil;

class PembeliController extends Controller
{
    // Menampilkan daftar pembeli
    public function index() {
        $pembelis = Pembeli::all();
        return view('pembeli.index', compact('pembelis'));
    }

    // Menampilkan form tambah pembeli
    public function create()
    {
        $mobils = ModelMobil::all();
        return view('pembeli.create', compact('mobils'));
    }

    // Menyimpan data pembeli baru
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'mobil_id' => 'required|exists:mobils,id', // Relasi ke tabel mobil
            'tanggal' => 'required|date',
        ]);

        // Simpan data pembeli
        Pembeli::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('pembeli.index')->with('success', 'Pembeli berhasil ditambahkan!');
    }
    
    
    // Menampilkan detail pembeli
    public function show($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.show', compact('pembeli'));
    }

    public function edit($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.edit', compact('pembeli'));
    }
    // Menghapus pembeli
    public function destroy($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();

        return redirect()->route('pembeli.index')->with('success', 'Pembeli berhasil dihapus!');
    }
    
}
