<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisimisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => '3bc48272ee9d456991c7bb6784081be6',
            'title' =>  Str::random(10),
            'content' => Str::random(200),
        ];
    }
}

