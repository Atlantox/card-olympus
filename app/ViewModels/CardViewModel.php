<?php

namespace App\ViewModels;

use App\Models\Card;
use mtgsdk\Card as MtgCard;

class CardViewModel
{
    public function __construct(public Card $card) { }

    public function mtg():MtgCard
    {
        return new MtgCard($this->card->multiuniverseid);
    }
}