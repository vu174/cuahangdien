<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Banner::factory(10)->create();
         \App\Models\Brand::factory(10)->create();
         \App\Models\Category::factory(10)->create();
         \App\Models\Product::factory(10)->create();
         \App\Models\ProductAttributes::factory(10)->create();
         \App\Models\Contact::factory(10)->create();
         \App\Models\Info::factory(10)->create();
         \App\Models\Order::factory(10)->create();
         \App\Models\Page::factory(10)->create();
         \App\Models\Order::factory(10)->create();
    }
}
