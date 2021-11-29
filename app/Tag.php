<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function users()
    {
      return $this->morpheByMany(User::class, 'taggable');
    }

    public function videos()
    {
      return $this->morpheByMany(Video::class, 'taggable');
    }
}
