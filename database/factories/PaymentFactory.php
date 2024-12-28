<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $arrayValues = ['Paid', 'Unpaid'];
        return [
            'booking_id' =>rand(1, 10),
            'user_id' => rand(1, 10),
            'price' => $this->faker->randomDigit(),
            'transaction_id' => $this->faker->text(),
            'status' =>$this->faker->randomElement(['Confirmed', 'Un_Confirmed']),
            

        ];
    }
}
