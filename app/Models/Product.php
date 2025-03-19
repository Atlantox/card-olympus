<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Article;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image_url', 'quantity',' active', 'article_id'];

    public function article():HasOne
    {
        return $this->hasOne(Article::class, 'articlegable');
    }
}
