<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'meta_title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'content' => $this->faker->word(),
            'image' => $this->faker->word(),
            'slug' => $this->faker->unique()->slug(),
            'keyword' => $this->faker->word(),
            'view' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
