<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Article;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = 
        [
            Product::create([
                'name' => 'Dragon shield sleeves dark blue',
                'description' => 'Mate sleeves of dark blue color ideal for protect your Magic cards. Compatible with perfect fit',
                'price' => 18,
                'image_name' => 'dragonshielddarkblue.png',
                'quantity' => 8,
            ]),
            Product::create([
                'name' => 'Dragon shield sleeves shiny yellow',
                'description' => 'Mate sleeves of a radiant yellow color ideal for protect your Magic cards. Compatible with perfect fit',
                'price' => 18,
                'image_name' => 'dragonshieldyellow.png',
                'quantity' => 10,
            ]),
                Product::create([
                'name' => 'Dragon shield sleeves white',
                'description' => 'Mate sleeves of pure white color ideal for protect your Magic cards. Compatible with perfect fit',
                'price' => 18,
                'image_name' => 'dragonshieldwhite.png',
                'quantity' => 4,
            ]),
        ];

        Article::create([
            'articleable_type' => Product::class,
            'articleable_id' => $products[0]->id
        ]);

        Article::create([
            'articleable_type' => Product::class,
            'articleable_id' => $products[1]->id
        ]);
        Article::create([
            'articleable_type' => Product::class,
            'articleable_id' => $products[2]->id
        ]);
    }
}
