<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Tag extends Model
{
    function posts() {
        return $this->belongsToMany(Post::class);
    }
}
