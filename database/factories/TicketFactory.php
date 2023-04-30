<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    public function definition(): array
    {
        return [
            'poster' => $this->faker->imageUrl,
            'title' => $this->faker->title,
            'subtitle' => $this->faker->title,
            'price' => random_int(200, 400)
        ];
    }
}
