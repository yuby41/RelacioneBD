<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
      return $this->morpheByMany(Post::class, 'taggable');
    }

    public function videos()
    {
      return $this->morpheByMany(Video::class, 'taggable');
    }
}
