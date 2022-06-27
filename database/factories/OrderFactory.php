<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'code_name' => $this->faker->numerify('DH000000##'),
            'code' => $this->faker->unique()->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'city' => $this->faker->city(),
            'province' => $this->faker->word(),
            'address' => $this->faker->address(),
            'description' => $this->faker->text(),
            'total' => $this->faker->word(),
            'status' => $this->faker->numberBetween(1, 3),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
