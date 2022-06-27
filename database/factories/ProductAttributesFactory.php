<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductAttributes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductAttributesFactory extends Factory
{
    protected $model = ProductAttributes::class;

    public function definition(): array
    {
        return [
            'type_name' => $this->faker->name(),
            'codename' => $this->faker->word(),
            'price' => $this->faker->numberBetween(0, 100000000),
            'discount' => $this->faker->numberBetween(0, 50),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'product_id' => Product::factory(),
        ];
    }
}
