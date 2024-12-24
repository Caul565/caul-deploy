<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //    Category::create([
    //     'name'=> 'food'
    //    ]);
       Category::create([
        'name'=> 'drink'
       ]);
    }
}
