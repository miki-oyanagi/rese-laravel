<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;

class Genre extends Model
{
    protected $table = 'genres';

    public function shops()
    {
      return $this->hasMany('App\Models\Shop');
    }
}
