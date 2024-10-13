<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stock;
use Illuminate\Support\Str;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            Stock::create([
                'name' => 'Stock ' . $i,
                'quantity' => rand(1, 100),
                'serial_number' => 'SN' . Str::random(10) . $i,
                'additional_info' => json_encode([
                    'manufacturer' => 'Manufacturer ' . rand(1, 5),
                    'warranty_period' => rand(1, 3) . ' years',
                ]),
                'created_by' => 1, // Adjust according to your user ID
                'updated_by' => 1, // Adjust according to your user ID
            ]);
        }
    }
}
