<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Article extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['articleable_type', 'articleable_id'];

    public function articleable():MorphTo
    {
        return $this->morphTo();
    }
}