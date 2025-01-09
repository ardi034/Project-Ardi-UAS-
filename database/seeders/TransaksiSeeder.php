<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;
use App\Models\Pembeli;
use App\Models\ModelMobil;
use Faker\Factory as Faker;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        // Pastikan tabel `Pembeli` dan `ModelMobil` memiliki data
        $pembelis = Pembeli::all();
        $modelMobils = ModelMobil::all();

        // Jika tabel terkait kosong, berhenti dengan error
        if ($pembelis->isEmpty() || $modelMobils->isEmpty()) {
            $this->command->error('Tabel Pembeli atau ModelMobil kosong. Pastikan seeder terkait sudah dijalankan.');
            return;
        }

        // Masukkan 100 data dummy ke tabel `transaksis`
        for ($i = 0; $i < 100; $i++) {
            Transaksi::create([
                'pembeli_id' => $pembelis->random()->id,
                'mobil_id' => $modelMobils->random()->id,
                'tanggal_transaksi' => $faker->date(),
            ]);
        }
    }
}
