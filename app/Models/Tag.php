<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Model\Quote;

class Tag extends Model
{
    /**
     * The quote that belong to the tag.
     */
    public function quotes()
    {
        return $this->belongsToMany(Quote::class);
    }
}
