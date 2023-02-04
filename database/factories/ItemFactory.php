<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ItemFactory extends Factory {

    protected $model = Item::class;

    public function definition(): array {
        return [
            'name' => $this->faker->name(),
            'weight' => $this->faker->randomFloat(2, 2,2),
            'volume' => $this->faker->randomFloat(2, 2,2),
        ];
    }
}
