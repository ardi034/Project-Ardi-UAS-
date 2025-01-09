<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pembeli;

class PembeliFactory extends Factory
{
    protected $model = Pembeli::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'alamat' => $this->faker->address, // Pastikan ada kolom 'alamat'
            'telepon' => $this->faker->phoneNumber,
        ];
    }
}
