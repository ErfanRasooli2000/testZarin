<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Order\Models\Order;
use Modules\Transaction\Models\Transaction;
use Modules\User\Models\User;
use Modules\User\Models\UserFollow;
use Modules\User\Models\UserPage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
         Transaction::factory(3000)->create();
         UserPage::factory(40)->create();
         UserFollow::factory(30)->create();
         Order::factory(8)->create();
    }
}
