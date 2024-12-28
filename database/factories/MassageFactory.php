<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Massage>
 */
class MassageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'massege' => $this->faker->paragraph(),
            'user_name' => $this->faker->name(),
            'email' => fake()->unique()->safeEmail(),
            'subject' => $this->faker->text(),
        ];
    }
}
