<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['billed', 'paid', 'void']);

        return [
            'customerId' => Customer::factory(),
            'amount' => $this->faker->numberBetween(100,20000),
            'status' => $status,
            'billedDate' => $this->faker->dateTimeThisDecade(),
            'paidDate' => $status === 'paid' ? $this->faker->dateTimeThisDecade() : null,
        ];
    }
}
