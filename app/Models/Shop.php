<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';

    public function get(){
        $items=Shop::with('area','genre')->get();
        $items=Area::with('shops')->get();
        $genre=Genre::with('shops')->get();
        return response()->json([
            'message'=>'OK',
            'data'=>$items,
            'data2' => $genre
        ],200);
    }

    public function areas()
    {
      return $this->belongsTo('App\Area');
    }



    public function genres()
    {
      return $this->belongsTo('App\Genre');
    }
}
