<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Quote extends Model
{
    /**
     * The tags that belong to the quote.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
