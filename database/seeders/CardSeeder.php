<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;
use App\Models\Article;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $card = Card::create([
            'multiverseid' => 386616,
            'quantity' => 2,
        ]);

        Article::create([
            'articlegable_type' => Card::class,
            'articlegable_id' => $card->id
        ]);
    }
}
