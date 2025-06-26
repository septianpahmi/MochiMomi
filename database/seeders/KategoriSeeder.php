<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::create([
            'name' => 'Makanan',
        ]);
        Categories::create([
            'name' => 'Minuman',
        ]);
        Categories::create([
            'name' => 'Handicraft & Accesories',
        ]);
    }
}
