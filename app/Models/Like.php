<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    public function user()
    {
        return $this->belongsTo(User::class,"user_id");
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class,"shop_id");
    }

    protected $fillable =[
        'user_id','shop_id'
    ];
}
