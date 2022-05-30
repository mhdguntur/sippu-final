<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PelayananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jenis' => 'Pelayanan',
            'judul' => $this->faker->word(3),
            'deskripsi' => $this->faker->sentences(1, true)
        ];
    }
}
