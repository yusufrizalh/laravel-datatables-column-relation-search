<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'detail' => $this->faker->sentence(5),
            'user_id' => rand(1, 5),
        ];
    }
}
