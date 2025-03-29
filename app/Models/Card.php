<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Article;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Card extends Model
{
    protected $fillable = ['multiverseid', 'quantity', 'active', 'article_id'];

    public function article():MorphOne
    {
        return $this->morphOne(Article::class, 'articleable');
    }
}
