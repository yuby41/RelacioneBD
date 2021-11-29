<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function users()
    {
        return $his->hasMany(User::class);
    }

    public function posts()
    {
        return $this->hasManyTrough(Post::class, User::class);
    }

    public function videos()
    {
        return $this->hasManyTrough(Video::class, User::class);
    }

}
