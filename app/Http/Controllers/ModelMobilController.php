<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelMobil;
use Illuminate\Support\Facades\Storage;


class ModelMobilController extends Controller
{
    // Menampilkan semua data mobil
    public function index()
    {
        $mobils = ModelMobil::all();
        return view('model-mobil.index', compact('mobils'));
    }

    // Menampilkan form untuk menambah mobil baru
    public function create()
    {
        return view('mobil.create');
    }

    // Menyimpan data mobil baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'merk' => 'required',
            'tahun' => 'required|integer',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto
        ]);
    
        // Menyimpan foto jika ada
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = $foto->store('public/foto_mobil'); // Menyimpan foto di folder storage/app/public/foto_mobil
        }
    
        // Menyimpan data mobil
        ModelMobil::create([
            'nama' => $request->nama,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'harga' => $request->harga,
            'foto' => isset($fotoPath) ? $fotoPath : null, // Menyimpan path foto
        ]);
    
        return redirect()->route('mobils.index')->with('success', 'Data mobil berhasil ditambahkan.');
    }
    
    // Menampilkan detail data mobil
    public function show($id)
    {
        $mobil = ModelMobil::findOrFail($id);  // Mengambil data mobil berdasarkan ID
        return view('model-mobil.show', compact('mobil'));
    }
    // Menampilkan form untuk mengedit data mobil
    public function edit($id)
    {
        $mobil = ModelMobil::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    // Mengupdate data mobil
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'merk' => 'required',
            'tahun' => 'required|integer',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto
        ]);
    
        $mobil = ModelMobil::findOrFail($id);
    
        // Proses foto jika ada
        if ($request->hasFile('foto')) {
            // Menghapus foto lama
            if ($mobil->foto) {
                Storage::delete($mobil->foto);
            }
    
            // Menyimpan foto baru
            $foto = $request->file('foto');
            $fotoPath = $foto->store('public/foto_mobil');
            $mobil->foto = $fotoPath;
        }
    
        $mobil->update([
            'nama' => $request->nama,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'harga' => $request->harga,
        ]);
    
        return redirect()->route('mobils.index')->with('success', 'Data mobil berhasil diperbarui.');
    }

    // Menghapus data mobil
    public function destroy($id)
    {
        $mobil = ModelMobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('mobils.index')->with('success', 'Data mobil berhasil dihapus.');
    }
    
}
