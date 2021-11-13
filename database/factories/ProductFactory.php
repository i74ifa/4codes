<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'title' => $this->faker->text(35),
            'image' => $ar[array_rand($ar)],
            'price' => random_int(1000, 10000),
            'details' => $this->faker->text(50),
            'category_id' => random_int(1, 4),
        ];
    }
}
