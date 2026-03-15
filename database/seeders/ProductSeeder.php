<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // 1. Create Categories
        $categories = [
            ['name' => 'Fresh Juices', 'slug' => 'fresh-juices'],
            ['name' => 'Energy Drinks', 'slug' => 'energy-drinks'],
            ['name' => 'Smoothies', 'slug' => 'smoothies'],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['slug' => $cat['slug']], [
                'name' => $cat['name'],
                'status' => 1
            ]);
        }

        $freshJuiceCat = Category::where('slug', 'fresh-juices')->first();
        $energyDrinkCat = Category::where('slug', 'energy-drinks')->first();

        // 2. Create Products using existing images in storage/products
        $products = [
            [
                'name' => 'Orange Blast',
                'slug' => 'orange-blast',
                'description' => 'Pure organic oranges squeezed to perfection.',
                'price' => 150.00,
                'category_id' => $freshJuiceCat->id,
                'status' => 1,
                'image' => 'products/DRdrSwFxcHflt50TDMcpDNYHDHvgL2eGKSt2VD07.jpg'
            ],
            [
                'name' => 'Green Power',
                'slug' => 'green-power',
                'description' => 'A mix of spinach, apple, and ginger for a healthy boost.',
                'price' => 180.00,
                'category_id' => $freshJuiceCat->id,
                'status' => 1,
                'image' => 'products/NfdGPDZbvcj3mYHPpymUkwIbo3O9DkolVMbRHbtJ.png'
            ],
            [
                'name' => 'Bubbly Green Lemon',
                'slug' => 'bubbly-power-mint',
                'description' => 'Refreshing minty energy drink with natural caffeine.',
                'price' => 120.00,
                'category_id' => $energyDrinkCat->id,
                'status' => 1,
                'image' => 'products/QWnfzTPMiTT7JftujApcVVecetrOIWtweHhA0vPk.png'
            ],
        ];

        foreach ($products as $prod) {
            Product::updateOrCreate(['slug' => $prod['slug']], $prod);
        }
    }
}
