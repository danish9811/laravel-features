<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PenFactory extends Factory {

    public function definition() {
        return [
            'name' => $this->faker->name,
            'weight' => $this->faker->randomFloat(2, 20, 40),
            'color' => $this->faker->colorName()
        ];
    }
}
