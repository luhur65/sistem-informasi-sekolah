<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array 
     */
    public function definition()
    {
        return [
            // fake data
            'nis' => $this->faker->randomNumber(8, true),
            'nama' => $this->faker->name(),
            'tempatlahir' => $this->faker->city(),
            'tgllahir' => $this->faker->date(),
            'alamat' => $this->faker->address(),
            'nohp' => $this->faker->phoneNumber(),
            'namaayah' => $this->faker->name('male'),
            'namaibu' => $this->faker->name('female'),
        ];
    }
}
