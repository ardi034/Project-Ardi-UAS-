<?php

namespace App\Http\Controllers;

use App\Models\Kredit;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class KreditController extends Controller
{
    // Menampilkan daftar kredit
    public function index()
    {
        $kredits = Kredit::all(); // Ambil semua data dari model Kredit
        return view('kredit.index', compact('kredits')); // Kirim data ke view
    }

    // Menampilkan form untuk membuat kredit baru
    public function create()
    {
        $pembelis = Pembeli::all();
        return view('kredit.create', compact('pembelis'));
    }

    // Menyimpan kredit baru
    public function store(Request $request)
    {
        $request->validate([
            'pembeli_id' => 'required|exists:pembelis,id',
            'jumlah_kredit' => 'required|numeric|min:1',
            'tanggal_kredit' => 'required|date',
        ]);

        Kredit::create($request->all());

        return redirect()->route('kredit.index')
                         ->with('success', 'Kredit berhasil ditambahkan!');
    }

    // Menampilkan kredit berdasarkan ID
    public function show($id)
    {
        $kredit = Kredit::with('pembeli')->findOrFail($id);
        return view('kredit.show', compact('kredit'));
    }

    // Menampilkan form untuk mengedit kredit
    public function edit($id)
    {
        $kredit = Kredit::findOrFail($id);
        $pembelis = Pembeli::all();
        return view('kredit.edit', compact('kredit', 'pembelis'));
    }

    // Memperbarui kredit
    public function update(Request $request, $id)
    {
        $request->validate([
            'pembeli_id' => 'required|exists:pembelis,id',
            'jumlah_kredit' => 'required|numeric|min:1',
            'tanggal_kredit' => 'required|date',
        ]);

        $kredit = Kredit::findOrFail($id);
        $kredit->update($request->all());

        return redirect()->route('kredit.index')
                         ->with('success', 'Kredit berhasil diperbarui!');
    }

    // Menghapus kredit
    public function destroy($id)
    {
        $kredit = Kredit::findOrFail($id);
        $kredit->delete();

        return redirect()->route('kredit.index')
                         ->with('success', 'Kredit berhasil dihapus!');
    }
}
