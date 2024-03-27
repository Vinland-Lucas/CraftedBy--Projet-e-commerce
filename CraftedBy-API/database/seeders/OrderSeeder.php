<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Database\Factories\ProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory()
                ->count(3)
                ->sequence(
                    ['status' => 'delivered'],
                    ['status' => 'not delivered'],
                )
//                ->for(User::factory())
                ->hasAttached(
                    Product::factory(),
                    ['product_quantity' => 2]
                )
                ->create();
    }
}
