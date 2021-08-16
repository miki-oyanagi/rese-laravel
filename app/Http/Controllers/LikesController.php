<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function first_check($shop)
    // {
    //     // $user =Auth::user();
    //     $likes = new Like();
    //     $like =Like::where('shop_id',$shop)->where('user_id',$user->id)->get();
    //     if($like){
    //         $count = $likes->where('shop_id',$shop)->where('like',1)->count();
    //         return [$like->like,$count];
    //     }else{
    //         $like = $likes->create([
    //             'user_id'=>$user->id,
    //             'shop_id'=>$shop,
    //             'like'=>0
    //         ]);
    //     }
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
       $now =Carbon::now();
       $param =[
           "user_id"=>$request->user_id,
           "shop_id"=>$request->shop_id,
           "created_at"=>$now,
           "updated_at"=>$now
       ];
       DB::table('likes')->insert($param);
       return response()->json([
           'message'=>'Like created',
           'data'=>$param
       ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user=Auth::user();
        // $likes=new Like();
        $likesdata=DB::table('likes')->get();

        return response()->json([
            'message'=>'OK',
            'data'=>$likesdata
            ],200);
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
    public function delete(Request $request)
    {
        DB::table('likes')->where('shop_id',$request->shop_id)->where('user_id',$request->user_id)->delete();
        return response()->json([
            'message'=> 'Like deleted'
        ],200);
    }
}
