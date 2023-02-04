<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory {

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(20, 40),
            'job_title' => $this->faker->jobTitle(),
            'salary' => $this->faker->numberBetween(20000, 90000)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return Factory
     */
    public function unverified() {
        return $this->state(function (array $attributes) {
            return [
                // 'email_verified_at' => null,
            ];
        });
    }
}
