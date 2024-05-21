<?php

namespace Database\Seeders;

use App\Models\location;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products_location = [
            'Ruang Teori 1',
            'Ruang Teori 2',
            'Ruang Teori 3',
            'Ruang Teori 4',
            'Ruang Teori 5',
            'Ruang Teori 6',
            'Perpustakaan',
            'Ruang Kurrikulum',
            'Bengkel Mesin',
            'Bengkel Listrik',
            'Bengkel Kayu',
            'Lab Komputer'
        ];

        foreach ($products_location as $location) {
            Location::create(['location_name' => $location]);
        }
    }
}