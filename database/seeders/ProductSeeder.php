<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            'product_name' => 'Apple MacBook Air',
            'product_merk' => 'Apple',
            'description' => 'A high-end laptop',
            'price' => 15000000.00,
            'qty' => 3,
            'total_price' => 45000000.00,
            'categoryID' => 2, // Electronics
            'locationID' => 10  // Warehouse A
        ]);
    }
}