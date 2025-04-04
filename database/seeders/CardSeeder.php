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
        $multiverse_ids = [
            386616, // Narset, Enlightened Master
            522262, // Asmoranomardicadaistinaculdacar
            491677, // Charix, the raging isle
            685919, // Thing in the ice
            589567, // Kenessos, priest of thassa
            580946, // Ghyrson
        ];

        foreach($multiverse_ids as $multiverseid){
            $url = 'https://api.scryfall.com/cards/multiverse/' . $multiverseid;
            $response = Http::get($url);
            $original_card = $response->json();
            $card = $original_card;

            if($card['layout'] === 'transform')
                $card = $original_card['card_faces'][0];

            
            $foil = mt_rand(0, 1) === 1;            
            $flavor = $card['flavor_text'] ?? null;
            
            $card = Card::create([
                'multiverseid' => $multiverseid,                
                'name' => $card['name'],
                'full_image_url' => $card['image_uris']['normal'],
                'flavor' => $flavor,
                'text' => $card['oracle_text'],
                'set' => $original_card['set_name'],
                'price' => $original_card['prices']['usd'],
                'price_foil' => $original_card['prices']['usd_foil'],
                'foil' => $foil
            ]);       

            $quantity = mt_rand(1, 8);    
            Article::create([
                'articleable_type' => Card::class,
                'articleable_id' => $card->id,
                'quantity' => $quantity,
            ]);
        }
    }
}
