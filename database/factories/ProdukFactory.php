<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nama = $this->faker->words(3, true);
        return [
            'user_id' => 1,
            'nama' => $nama,
            'deskripsi' => $this->faker->words(10, true),
            'slug' => Str::slug($nama),
            'harga' => $this->faker->randomNumber(5, true)
        ];
    }
}
