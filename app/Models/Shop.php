<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\Genre;

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

    public function area()
    {
      return $this->belongsTo('App\Models\Area');
    }



    public function genre()
    {
      return $this->belongsTo('App\Models\Genre');
    }

    public function likes()
    {
      return $this->hasMany('App\Models\Like');
    }
}
