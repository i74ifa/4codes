<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ar = ['img/test/1.png', 'img/test/2.png', 'img/test/3.png', 'img/test/4.png'];
        return [
            'path' => $ar[array_rand($ar)]
        ];
    }
}
