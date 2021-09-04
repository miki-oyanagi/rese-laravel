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
        $items=Shop::with('area','genre')->get();
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
    public function show(Request $request,$id)
    {


    
         $detaildata = Shop::where('id',$id)->with('area','genre')->first();
         return response()->json([
        //  'message'=>'OK',
         'data'=>$detaildata
         ],200);



        // $shop = Shop::where('id', $id)->first();
        // //var_dump($item);
        // $area = DB::table('areas')->where('id',$shop->area_id)->first();

        // return response()->json($shop, 200);
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
    public function get(Request $request)
    {
        // $user_id=$request->user_id;
        $id=$request->id;
        $getlikes=Shop::where('id',$id)->get();
        return response()->json([
            // 'message'=>'OK',
            'data'=>$getlikes
            ],200);

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
