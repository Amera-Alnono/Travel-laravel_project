<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'date'=>$this->faker->date(),
            'cost' => $this->faker->randomDigit(),
            'organizer' => $this->faker->name(),
            'rating' => $this->faker->randomFloat(5,0,5),
        ];
    }
}
