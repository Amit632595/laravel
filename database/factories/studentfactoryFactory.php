<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class studentfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'age' => fake()->numberbetween(15,20),
            'email' => fake()->email(),
            'address' => fake()->addresh(),
            'city' => fake()->city(),
            'phone' => fake()->phone(),
            'password' => fake()->password(),
        ];
    }
}
