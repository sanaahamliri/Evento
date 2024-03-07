<?php

namespace Database\Seeders;

use App\Models\categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            ['categorieName' => 'abc'],
            ['categorieName' => 'abcd'],
            ['categorieName' => 'abcdef'],
            ['categorieName' => 'lorem'],
            ['categorieName' => 'lorem epsum'],
            ['categorieName' => 'lorem epsum isit'],
        ];
        categorie::insert($categories);
    }
}
