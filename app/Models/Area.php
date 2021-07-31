<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;

class Area extends Model
{
    protected $table = 'areas';

    public function shops()
    {
      return $this->hasMany('App\Models\Shop');
    }
}
