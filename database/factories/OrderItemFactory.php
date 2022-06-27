<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ProductAttributes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrderItemFactory extends Factory
{
    protected $model = OrderItem::class;
    public function definition(): array
    {
        return [
            'quantity' => ProductAttributes::factory('quantity'),
            'price' => ProductAttributes::factory('price'),
            'discount' => ProductAttributes::factory('discount'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'product_attribute_id' => ProductAttributes::factory(),

            'order_id' => Order::factory(),
        ];
    }
}
