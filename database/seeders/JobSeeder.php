<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            'PNS',
            'TNI',
            'Polisi',
            'Pegawai Swasta',
            'Dokter',
            'Perawat',
            'Guru',
            'Karyawan Bank',
            'Petani',
            'Nelayan',
            'Wirausaha',
            'Insinyur',
            'Arsitek',
            'Jurnalis',
            'Software Engineer',
            'Desainer Grafis',
            'Ahli Gizi',
            'Psikolog',
            'Akuntan',
            'Manajer Proyek',
        ];

        foreach ($jobs as $job) {
            DB::table('jobs')->insert([
                'job_name' => $job,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
