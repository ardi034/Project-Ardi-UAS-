<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobil_id',
        'pembeli_id',
        'tanggal_transaksi',
    ];

    // Relasi ke model Mobil
    public function modelMobil()
    {
        return $this->belongsTo(ModelMobil::class, 'mobil_id');
    }

    // Relasi ke model Pembeli
    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id');
    }
}
