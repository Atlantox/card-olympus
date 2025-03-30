<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Article;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Card extends Model
{
    public function article():MorphOne
    {
        return $this->morphOne(Article::class, 'articleable');
    }
}
