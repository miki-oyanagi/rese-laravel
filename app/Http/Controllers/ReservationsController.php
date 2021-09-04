<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   $user_id=$request->user_id;
        $items=Reservation::where('user_id',$user_id)->with('shop')->get();
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
    public function post(Request $request)
    {
        $now =Carbon::now();
        $book =[
            "user_id"=>$request->user_id,
            "shop_id"=>$request->shop_id,
            "reservation_date"=>$request->reservation_date,
            "reservation_time"=>$request->reservation_time,
            "reservation_number"=>$request->reservation_number,
            "created_at"=>$now,
            "updated_at"=>$now
        ];
        DB::table('reservations')->insert($book);
        return response()->json([
            'message'=>'book done',
            'data'=>$book
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
