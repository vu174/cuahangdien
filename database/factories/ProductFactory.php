<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'meta_title' => $this->faker->word(),
            'content' => $this->faker->word(),
            'description' => $this->faker->text(),
            'image' => $this->faker->word(),
            'slug' => $this->faker->unique()->slug(),
            'warranty' => '1-3 năm',
            'keyword' => $this->faker->word(),
            'view' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'category_id' => Category::factory(),
            'brand_id' => Brand::factory(),
        ];
    }
}
