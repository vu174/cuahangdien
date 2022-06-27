<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TariffFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'link_download' => $this->faker->word(),
            'image' => $this->faker->word(),
            'language' => 'Tiếng Việt',
            'active' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'brand_id' => Brand::factory(),
        ];
    }
}
