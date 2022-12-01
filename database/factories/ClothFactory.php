<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jacket>
 */
class ClothFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'type' => fake()->randomElement(['uniform', 'sport', 'traditional']),
            'size' => fake()->randomElement(['s', 'm', 'l', 'xl']),
            'price' => rand(25,100) . '000'
        ];
    }
}