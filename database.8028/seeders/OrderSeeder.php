<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Carbon\Carbon;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['pending', 'shipped', 'delivered'];

        for ($i = 1; $i <= 20; $i++) {
            Order::create([
                'order_number'  => 'ORD-' . (2800 + $i),
                'customer_name'=> fake()->name(),
                'phone'         => fake()->phoneNumber(),
                'address'       => fake()->address(),
                'total_amount' => rand(200, 5000),
                'status'        => $statuses[array_rand($statuses)],
                'payment_mode' => 'COD',
                'payment_status' => 'paid',
                'created_at'    => Carbon::now()->subDays(rand(0, 10)),
            ]);
        }
    }
}
