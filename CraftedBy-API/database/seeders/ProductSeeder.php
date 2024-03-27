<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()
                    ->count(3)
//                    ->for(Business::factory())
//                    ->hasAttached(
//                        Order::factory(),
//                        ['product_quantity' => 2]
//                    )
                    ->create();
    }
}
