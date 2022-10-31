<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expanse>
 */
class ExpanseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cat_id' => rand(1,100),
            'remarks' => fake()->name(),
            'amount'=>rand(10000,1000000),
            'company_id' => rand(1,10),
            'created_at'=>now(),
        ];
    }
}
