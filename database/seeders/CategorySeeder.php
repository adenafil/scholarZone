<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'SMA',
        ]);

        Category::create([
            'name' => 'S1',
        ]);

        Category::create([
            'name' => 'S2',
        ]);

        Category::create([
            'name' => 'S3',
        ]);



    }
}
