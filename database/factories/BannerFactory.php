<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BannerFactory extends Factory
{
    protected $model = Banner::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'url' => $this->faker->url(),
            'alt' => $this->faker->word(),
            'image' => $this->faker->word(),
            'sort' => $this->faker->numberBetween(1, 20),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
