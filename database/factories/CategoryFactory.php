<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'meta_title' => $this->faker->word(),
            'slug' => $this->faker->unique()->slug(),
            'parent_id' => $this->faker->numberBetween(1, 5),
            'keyword' => $this->faker->word(),
            'icon' => $this->faker->word(),
            'description' => $this->faker->text(),
            'image' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
