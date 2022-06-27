<?php

namespace Database\Factories;

use App\Models\Info;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class InfoFactory extends Factory
{

    protected $model = Info::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'keyword' => $this->faker->word(),
            'description' => $this->faker->text(),
            'logo' => $this->faker->word(),
            'icon' => $this->faker->word(),
            'hotline1' => $this->faker->phoneNumber(),
            'hotline2' => $this->faker->phoneNumber(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
            'tax_code' => $this->faker->word(),
            'business_license' => $this->faker->word(),
            'map_address' => $this->faker->address(),
            'map_iframe' => $this->faker->word(),
            'facebook' => $this->faker->word(),
            'zalo' => $this->faker->phoneNumber(),
            'sale' => $this->faker->phoneNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
