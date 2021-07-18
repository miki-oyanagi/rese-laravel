<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class RegisterController extends Controller
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
    }

}
