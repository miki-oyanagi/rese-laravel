<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table = 'users';

    public function likes()
    {
      return $this->belongToMany('App\Models\Like');
    }
}

