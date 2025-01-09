<?php

namespace Database\Factories;

use App\Models\ModelMobil;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelMobilFactory extends Factory
{
    protected $model = ModelMobil::class;

    public function definition()
    {
        return [
            'merk' => $this->faker->company,
            'tipe' => $this->faker->word,
        ];
    }
}
