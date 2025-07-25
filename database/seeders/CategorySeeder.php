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
            'name' => 'Mamutes'
        ]);
        Category::create([
            'name' => 'Pinguins'
        ]);
        Category::create([
            'name' => 'Abacaxi'
        ]);
        Category::create([
            'name' => 'Estevan'
        ]);
        Category::create([
            'name' => 'Batati'
        ]);
        Category::create([
            'name' => 'Batatá'
        ]);
    }
}
