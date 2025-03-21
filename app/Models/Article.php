<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Article extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = ['articlegable_type', 'articlegable_id'];

    public function articlegable():MorphTo
    {
        return $this->morphTo();
    }
}