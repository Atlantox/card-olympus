<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Card;
use mtgsdk\Card as MtgCard;
use App\Models\Article;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $multiverseid = 386616;
        $mtgCard = MtgCard::find($multiverseid);
        $card = Card::create([
            'multiverseid' => $multiverseid,
            'quantity' => 2,
            'name' => $mtgCard->name,
            'image_url' => $mtgCard->imageUrl,
            'text' => $mtgCard->text,
            'set' => $mtgCard->setName
        ]);       

        Article::create([
            'articlegable_type' => Card::class,
            'articlegable_id' => $card->id
        ]);
    }
}
