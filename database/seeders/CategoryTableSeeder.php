<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [ 'id' => 1, 'name' => 'BreakFast', ],
            [ 'id' => 2, 'name' => 'Launch', ],
            [ 'id' => 3, 'name' => 'Dinner', ],

        ];
        Category::insert($category);
    }
}
