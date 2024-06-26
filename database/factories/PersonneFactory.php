<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personne>
 */
class PersonneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>Fake()->name(),
            'age'=>Fake()->numberBetween(10,30),
            'sexe' = $this->faker->randomElement(['homme', 'femme']);

        ];
    }
}
