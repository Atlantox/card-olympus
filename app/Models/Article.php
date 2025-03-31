<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Article extends Model
{
    protected $guarded = ['id'];

    public function articleable():MorphTo
    {
        return $this->morphTo();
    }

    protected function getOnOfferAttribute():bool
    {
        return date('Y-m-d') <= $this->offer_finish;
    }

    /**
     * Return the price of the article
     * 
     * If the article is a foil card, return the foil price
     */
    protected function getSubPriceAttribute():float
    {
        $result = $this->articleable->price;
        if(class_basename($this->articlable_type) === 'Card'){
            if($this->articleable->foil === 1)
                $result = $this->articleable->price_foil;
        }

        return $result;
    }

    /**
     * Returns the price with the offer discount applied
     */
    protected function getFinalPriceAttribute():float
    {
        if($this->onOffer){
            $subPrice = $this->subPrice;
            return round(($subPrice) - ($subPrice * ($this->offer / 100)), 2);
        }
        else{
            return $this->articleable->price;
        }
    }
}