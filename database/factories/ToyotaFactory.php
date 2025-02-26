<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ToyotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'model' => $this->faker->name,
            'engine' => $this->faker->name,
            'price' => $this->faker->name,
        ];
    }
}
