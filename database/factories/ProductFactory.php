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
        return [
            'title' => $this->faker->text(50),
            'image' => 'img/1.png',
            'price' => $this->faker->randomNumber(),
            'category_id' => random_int(1, 2),
        ];
    }
}
