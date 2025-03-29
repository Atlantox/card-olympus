<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;
use mtgsdk\Card as MtgCard;
use App\Models\Article;
use Illuminate\Support\Facades\Http;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $multiverseid = 386616;
        $url = 'https://api.scryfall.com/cards/multiverse/' . $multiverseid;
        $response = Http::get($url);
        $card = $response->json();

        $card = Card::create([
            'multiverseid' => $multiverseid,
            'quantity' => 2,
            'name' => $card['name'],
            'image_url' => $card['image_uris']['normal'],
            'text' => $card['oracle_text'],
            'set' => $card['set_name'],
            'price' => $card['prices']['usd'],
            'price_foil' => $card['prices']['usd_foil'],
        ]);       

        Article::create([
            'articleable_type' => Card::class,
            'articleable_id' => $card->id
        ]);
    }
}
