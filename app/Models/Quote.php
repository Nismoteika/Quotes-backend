<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Quote extends Model
{
    protected $casts = [
        'created_at' => 'datetime:d M Y H:i',
    ];

    protected $appends = [
        'tags'
    ];

    /**
     * The tags that belong to the quote.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getTagsAttribute()
    {
        return $this->tags()->select('name')->get();   
    }
}
