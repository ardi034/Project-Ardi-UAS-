<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pembeli;
use Faker\Factory as Faker;

class PembeliSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Pembeli::create([
                'nama' => $faker->name, // Mengisi nama dengan random menggunakan Faker
                'model' => $faker->word, 
                'tanggal_pembelian' => $faker->date,
            ]);
        }
    }
}
