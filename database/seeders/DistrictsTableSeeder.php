<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('districts')->insert([
            ['id' => 1, 'name' => 'Gambir', 'city_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Tanah Abang', 'city_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Menteng', 'city_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Pademangan', 'city_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Kecamatan Cilincing', 'city_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Mampang Prapatan', 'city_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => 'Kemang', 'city_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'name' => 'Cengkareng', 'city_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'name' => 'Kembangan', 'city_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'name' => 'Duren Sawit', 'city_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'name' => 'Ciracas', 'city_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
