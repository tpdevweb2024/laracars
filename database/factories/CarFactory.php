<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isNew = fake()->boolean(25);
        return [
            "brand"         => fake()->word(),
            "model"         => fake()->word(),
            "kilometers"    => $isNew ? 0 : fake()->numberBetween(0, 700000),
            "is_new"        => $isNew,
            "price"         => fake()->randomFloat(2, 0, 100000),
        ];
    }
}
