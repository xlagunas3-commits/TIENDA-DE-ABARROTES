<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        $products = Product::all();
        $statuses = ['pending', 'processing', 'shipped', 'delivered', 'cancelled'];

        if ($users->isEmpty() || $products->isEmpty()) {
            return;
        }

        for ($i = 1; $i <= 40; $i++) {
            $user = $users->random();
            $order = Order::create([
                'user_id' => $user->id,
                'total' => 0,
                'status' => $statuses[array_rand($statuses)],
            ]);

            $selectedProducts = $products->random(rand(2, 5));
            $orderTotal = 0;

            foreach ($selectedProducts as $product) {
                $quantity = rand(1, 4);
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'price' => $product->price,
                ]);

                $orderTotal += $product->price * $quantity;
            }

            $order->update(['total' => round($orderTotal, 2)]);
        }
    }
}
