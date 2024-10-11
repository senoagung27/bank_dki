<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $villages = [
            // Villages in Aceh (District ID: 1 to 7)
            ['name' => 'Gampong Baro', 'district_id' => 1],
            ['name' => 'Gampong Blang', 'district_id' => 1],
            ['name' => 'Gampong Pasi', 'district_id' => 1],
            ['name' => 'Gampong Simpang', 'district_id' => 1],
            ['name' => 'Gampong Sumatera', 'district_id' => 1],
            ['name' => 'Gampong Meunasah', 'district_id' => 1],
            ['name' => 'Gampong Tanjung', 'district_id' => 2],
            ['name' => 'Gampong Ulee Lheue', 'district_id' => 2],
            ['name' => 'Gampong Leupung', 'district_id' => 3],
            ['name' => 'Gampong Gani', 'district_id' => 3],
            ['name' => 'Gampong Blang Satu', 'district_id' => 4],
            ['name' => 'Gampong Nusa', 'district_id' => 4],
            ['name' => 'Gampong Kuta Alam', 'district_id' => 5],
            ['name' => 'Gampong Lampaseh', 'district_id' => 5],
            ['name' => 'Gampong Kandang', 'district_id' => 6],
            ['name' => 'Gampong Alue Naga', 'district_id' => 6],
            ['name' => 'Gampong Tanjong Selamat', 'district_id' => 7],
            ['name' => 'Gampong Baro Nusa', 'district_id' => 7],

            // Villages in Bali (District ID: 8 to 12)
            ['name' => 'Kelurahan Kesiman', 'district_id' => 8],
            ['name' => 'Kelurahan Pemecutan Klod', 'district_id' => 8],
            ['name' => 'Kelurahan Renon', 'district_id' => 9],
            ['name' => 'Kelurahan Penatih', 'district_id' => 9],
            ['name' => 'Kelurahan Dauh Puri', 'district_id' => 9],
            ['name' => 'Desa Canggu', 'district_id' => 10],
            ['name' => 'Desa Tegalalang', 'district_id' => 11],
            ['name' => 'Desa Ubud', 'district_id' => 12],

            // Villages in West Java (District ID: 13 to 20)
            ['name' => 'Desa Cibiru', 'district_id' => 13],
            ['name' => 'Desa Cisarua', 'district_id' => 13],
            ['name' => 'Desa Cimahi', 'district_id' => 14],
            ['name' => 'Desa Parakan Muncang', 'district_id' => 14],
            ['name' => 'Desa Cikole', 'district_id' => 15],
            ['name' => 'Desa Lembang', 'district_id' => 15],
            ['name' => 'Desa Kertajaya', 'district_id' => 16],
            ['name' => 'Desa Cileunyi', 'district_id' => 17],
            ['name' => 'Desa Sumedang', 'district_id' => 18],
            ['name' => 'Desa Cipadung', 'district_id' => 19],
            ['name' => 'Desa Sukasari', 'district_id' => 20],

            // Villages in Central Java (District ID: 21 to 27)
            ['name' => 'Kelurahan Mlatiharjo', 'district_id' => 21],
            ['name' => 'Kelurahan Kudu', 'district_id' => 21],
            ['name' => 'Kelurahan Kalibanteng', 'district_id' => 22],
            ['name' => 'Kelurahan Genuk', 'district_id' => 22],
            ['name' => 'Kelurahan Tembalang', 'district_id' => 23],
            ['name' => 'Desa Karanganyar', 'district_id' => 24],
            ['name' => 'Desa Salatiga', 'district_id' => 25],
            ['name' => 'Desa Klaten', 'district_id' => 26],
            ['name' => 'Desa Wonosobo', 'district_id' => 27],

            // Villages in East Java (District ID: 28 to 35)
            ['name' => 'Kelurahan Gubeng', 'district_id' => 28],
            ['name' => 'Kelurahan Wonokromo', 'district_id' => 28],
            ['name' => 'Kelurahan Dukuh Pakis', 'district_id' => 29],
            ['name' => 'Kelurahan Krembangan', 'district_id' => 29],
            ['name' => 'Kelurahan Rungkut', 'district_id' => 30],
            ['name' => 'Desa Jember', 'district_id' => 31],
            ['name' => 'Desa Malang', 'district_id' => 32],
            ['name' => 'Desa Probolinggo', 'district_id' => 33],
            ['name' => 'Desa Sidoarjo', 'district_id' => 34],
            ['name' => 'Desa Bangkalan', 'district_id' => 35],

            // Villages in North Sumatra (District ID: 36 to 42)
            ['name' => 'Desa Medan', 'district_id' => 36],
            ['name' => 'Desa Deli Serdang', 'district_id' => 36],
            ['name' => 'Desa Simalungun', 'district_id' => 37],
            ['name' => 'Desa Pematang Siantar', 'district_id' => 37],
            ['name' => 'Desa Sibolga', 'district_id' => 38],
            ['name' => 'Desa Tapanuli', 'district_id' => 39],
            ['name' => 'Desa Labuhanbatu', 'district_id' => 40],
            ['name' => 'Desa Nias', 'district_id' => 41],
            ['name' => 'Desa Samosir', 'district_id' => 42],

            // Villages in South Sulawesi (District ID: 43 to 50)
            ['name' => 'Desa Makassar', 'district_id' => 43],
            ['name' => 'Desa Maros', 'district_id' => 44],
            ['name' => 'Desa Gowa', 'district_id' => 45],
            ['name' => 'Desa Barru', 'district_id' => 46],
            ['name' => 'Desa Pangkep', 'district_id' => 47],
            ['name' => 'Desa Bulukumba', 'district_id' => 48],
            ['name' => 'Desa Sinjai', 'district_id' => 49],
            ['name' => 'Desa Bone', 'district_id' => 50],

            // Villages in Riau (District ID: 51 to 56)
            ['name' => 'Desa Pekanbaru', 'district_id' => 51],
            ['name' => 'Desa Kampar', 'district_id' => 52],
            ['name' => 'Desa Siak', 'district_id' => 53],
            ['name' => 'Desa Kuantan', 'district_id' => 54],
            ['name' => 'Desa Indragiri', 'district_id' => 55],
            ['name' => 'Desa Rokan', 'district_id' => 56],

            // Villages in West Kalimantan (District ID: 57 to 63)
            ['name' => 'Desa Pontianak', 'district_id' => 57],
            ['name' => 'Desa Kubu Raya', 'district_id' => 58],
            ['name' => 'Desa Landak', 'district_id' => 59],
            ['name' => 'Desa Sintang', 'district_id' => 60],
            ['name' => 'Desa Melawi', 'district_id' => 61],
            ['name' => 'Desa Kapuas Hulu', 'district_id' => 62],
            ['name' => 'Desa Bengkayang', 'district_id' => 63],

            // Villages in South Sumatra (District ID: 64 to 70)
            ['name' => 'Desa Palembang', 'district_id' => 64],
            ['name' => 'Desa Ogan Ilir', 'district_id' => 65],
            ['name' => 'Desa Musi Banyuasin', 'district_id' => 66],
            ['name' => 'Desa Ogan Komering Ilir', 'district_id' => 67],
            ['name' => 'Desa Lahat', 'district_id' => 68],
            ['name' => 'Desa Empat Lawang', 'district_id' => 69],
            ['name' => 'Desa Muratara', 'district_id' => 70],

            // Add more villages as necessary for other provinces and districts
        ];

        DB::table('villages')->insert($villages);
    }
}
