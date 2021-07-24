<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class UsersController extends Controller
{
    public function post(Request $request)
    {
        $now= Carbon::now();
        $hashed=Hash::make($request->password);
        $param=[
            "user_name"=> $request->user_name,
            "email"=>$request->email,
            "password"=>$request->password,
        ];

        DB::table('users')->insert($param);
        return response()->json([
            'message'=>'OK',
            'data'=>$param
        ],200);
        if($param){
            return response(view('thankspage'),200);
        }else{
            return response()->json(
                ['message'=>'Already registated',
                 'data'=>$param
            ],404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get(Request $request)
    {
        if($request->has('email')){
            $items =DB::table('users')->where('email',$request->email)->get();
            return response()->json([
                'message'=>'User got successfully',
                'data'=>$items
            ],200);
        }else{
            return response()->json(['stataus'=>'not found'],400);
        }
   
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
