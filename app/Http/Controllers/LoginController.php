<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function post(Request $request){
        $items=DB::table('users')->where('email',$request->email)->first();
        $param=[
            "user_name"=> $request->user_name,
            "email"=>$request->email,
            "password"=>$request->password,
        ];
        if(Hash::check($request->password,$items->password)){
            return response()->json(['auth'=>true,
             'data'=>$param
        ],200);
        }else{
            return response()->json(['auth'=>false],200);
        }
    }
}
