<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // ['name' => 'Nasi Goreng', 'category_id' => 1, 'price' => 15000, 'stock' => 50, 'image' => 'nasgor.jpg'],
            // ['name' => 'Jalangkote', 'category_id' => 1, 'price' => 5000, 'stock' => 30, 'image' => 'jalkot.jpg'],
            // ['name' => 'Pallubasa', 'category_id' => 1, 'price' => 19000, 'stock' => 25, 'image' => 'pallubasa.jpg'],
            // ['name' => 'Gado-Gado', 'category_id' => 1, 'price' => 18000, 'stock' => 40, 'image' => 'gadogado.png'],
            // ['name' => 'Coto', 'category_id' => 1, 'price' => 17000, 'stock' => 60, 'image' => 'coto.jpg'],
            // ['name' => 'Konro', 'category_id' => 1, 'price' => 19000, 'stock' => 100, 'image' => 'konro.jpg'],
            // ['name' => 'Nasi Uduk', 'category_id' => 1, 'price' => 19000, 'stock' => 70, 'image' => 'nasiuduk.png'],
            // ['name' => 'Somay', 'category_id' => 1, 'price' => 18000, 'stock' => 120, 'image' => 'somay.jpg'],
            ['name' => 'Es Teh', 'category_id' => 2, 'price' => 6000, 'stock' => 50, 'image' => 'esteh.jpg'],
            ['name' => 'Air Mineral', 'category_id' => 2, 'price' => 5000, 'stock' => 80, 'image' => 'air.jpg'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

    }
}
