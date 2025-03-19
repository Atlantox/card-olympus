<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\Article;
use mtgsdk\Card as MtgCard;

class Card extends Model
{
    protected $fillable = ['multiverseid', 'quantity', 'active', 'article_id'];

    public function article():HasOne
    {
        return $this->hasOne(Article::class, 'articlegable');
    }

    public function mtg():MtgCard
    {
        return new MtgCard($this->multiverseid);
    }
}
