<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cat_id' => rand(1,20),
            'name' => fake()->name(),
            'price'=>rand(10000,1000000),
            'company_id' => 1,
            'created_at'=>now(),
        ];
    }
}
