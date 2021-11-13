<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ar = ['ايفون', 'اندرويد', 'انظمة', 'اكواد'];
        return [
            'name' => $ar[array_rand($ar)]
        ];
    }
}
