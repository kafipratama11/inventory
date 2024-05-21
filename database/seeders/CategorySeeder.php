<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Electronics',
            'Computers & Accessories',
            'Music Instruments',
            'Furniture',
            'Clothing',
            'Books',
            'Home Appliances',
            'Toys & Games',
            'Sports & Outdoors',
            'Health & Beauty',
            'Automotive',
            'Groceries',
            'Cleaning Supplies',
            'Library Books'
        ];

        foreach ($categories as $category) {
            Categories::create(['category_name' => $category]);
        }
    }
}