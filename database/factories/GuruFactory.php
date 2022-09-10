<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuruFactory extends Factory
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
            'nip' => $this->faker->randomNumber(8, true),
            'nama' => $this->faker->name(),
            'tlahir' => $this->faker->city(),
            'tgllahir' => $this->faker->date(),
            'alamat' => $this->faker->address(),
            'bidangstudi' => $this->faker->sentence(6, true),
        ];
    }
}
