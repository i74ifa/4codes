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
            'title' => $this->faker->realText(35),
            'price' => random_int(1000, 10000),
            'details' => $this->faker->realText(1000),
            'category_id' => random_int(1, 4),
        ];
    }
}
