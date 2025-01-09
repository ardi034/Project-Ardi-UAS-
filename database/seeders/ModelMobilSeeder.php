<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelMobil;
use Faker\Factory as Faker;

class ModelMobilSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            ModelMobil::create([
                'merk' => $faker->company(), // Mengisi kolom 'merk' dengan nama perusahaan acak
                'model' => $faker->word(),   // Mengisi kolom 'model' dengan kata acak
                'tahun' => $faker->year(),    // Mengisi kolom 'tahun' dengan tahun acak
            ]);
        }
    }
}
