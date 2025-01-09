<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembelis'; // Nama tabel

    // Kolom yang diizinkan untuk diisi melalui mass assignment
    protected $fillable = [
        'nama', 
        'merk', 
        'tanggal_pembelian',
    ];

    // Timestamps untuk created_at dan updated_at
    public $timestamps = true;

    // Aturan validasi data pembeli
    public static $rules = [
        'nama' => 'required|string|max:255', // Perbaikan validasi nama
        'merk' => 'required|string|max:255',
        'tanggal_pembelian' => 'required|date',
    ];

    // Fungsi untuk menyimpan data pembeli dengan validasi
    public static function storePembeli($data) {
        $validatedData = Validator::make($data, self::$rules)->validate();
        return self::create($validatedData);
    }

    // Relasi dengan model Transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    // Relasi tambahan jika pembeli terkait dengan mobil
    public function mobil()
    {
        return $this->belongsTo(ModelMobil::class, 'mobil_id');
    }
}
