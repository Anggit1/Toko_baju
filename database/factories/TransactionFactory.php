<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'buyer' => rand(1,10),
            'purchase_date' => now()->format('Y-m-d'),
            'cloth' => rand(1,10),
            'quantity' => rand(1,3),
            'total_price' => rand(50,500) . '000'
        ];
    }
}