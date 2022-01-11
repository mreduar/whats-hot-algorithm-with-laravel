<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'url' => $this->faker->url,
            'thumbs_up' => $this->faker->numberBetween(0, 120),
            'thumbs_down' => $this->faker->numberBetween(0, 120),
            'created_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
