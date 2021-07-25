<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\DB;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Shop::all();
        #$items = $users->leftJoin('message', 'users.id', '=', 'message.user_id')->get();
        $areas = Shop::all();


        return response()->json([
            'message'=>'OK',
            'data'=>$items
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show(Shop $shop)
    public function show($id)
    {
        $shop = Shop::where('id', $id)->first();
        //var_dump($item);
        $area = DB::table('areas')->where('id',$shop->area_id)->first();

        return response()->json($shop, 200);
        //return response()->json($shop, 200);
        // var_dump($item);
        // exit;
        // $name=$shop->name;
        // $area = DB::table('areas')->where('id',$shop->area_id)->get();
        // $genre = DB::table('genre')->where('id',$shop->genre_id)->get();
        // // $detail=Shop::where('detail',$shop->detail)->get();
        // $image=Shop::where('image',$shop->image)->get();
        //return response()->json($shop, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
