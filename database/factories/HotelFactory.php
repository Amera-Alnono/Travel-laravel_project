<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arrayValues = ['Available', 'Unavailable'];
        return [
            'name' => $this->faker->name(),
            'avarage_rating' => $this->faker->randomFloat(5,0,5),
            'quantity_rating' => $this->faker->randomDigit(),
            'country' => $this->faker->text(),
            'price_per_night' => $this->faker->randomDigit(),
            'status' => $this->faker->randomElement(['Available', 'Unavailable']),

        ];
    }
}
