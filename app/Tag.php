<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function users()
    {
      return $this->morphByMany(User::class, 'taggable');
    }

    public function videos()
    {
      return $this->morphByMany(Video::class, 'taggable');
    }
}
