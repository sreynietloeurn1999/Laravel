<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
class Post extends Model
{
    protected $fillable = [
        'user_id', 'title', 'body',
    ];

    function Tags() {
        return $this->belongsToMany(Tag::class);
    }
}
