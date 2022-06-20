<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'code_name' => $this->faker->unique()->name(),
            'code' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'city' => $this->faker->city(),
            'province' => $this->faker->word(),
            'address' => $this->faker->address(),
            'description' => $this->faker->text(),
            'total' => $this->faker->word(),
            'payment_status' => $this->faker->randomNumber(),
            'shipping_status' => $this->faker->randomNumber(),
            'status' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'shipping_method_id' => $this->faker->randomNumber(),
        ];
    }
}
