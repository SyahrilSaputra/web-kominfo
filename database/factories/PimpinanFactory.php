<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PimpinanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => '3bc48272ee9d456991c7bb678408f3e6',
            'nama' =>  Str::random(10),
            'jabatan' => Str::random(20),
            'image' => Str::random(40),
        ];
    }
}
