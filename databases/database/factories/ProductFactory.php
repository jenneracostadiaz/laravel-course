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
            'name' => $this->faker->name(),
            'short_description' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->numberBetween(1, 125),
        ];
    }
}
