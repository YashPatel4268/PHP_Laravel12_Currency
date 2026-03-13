<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    public function run()
    {
        DB::table('currencies')->insert([
            [
                'name' => 'US Dollar',
                'code' => 'USD',
                'symbol' => '$',
                'format' => '$1.00',
                'exchange_rate' => 1, // Base
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Indian Rupee',
                'code' => 'INR',
                'symbol' => '₹',
                'format' => '₹1',
                'exchange_rate' => 91, // Approx. current INR per USD
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Euro',
                'code' => 'EUR',
                'symbol' => '€',
                'format' => '€1',
                'exchange_rate' => 0.848, // Approx. current EUR per USD
                'active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
