<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function post(Request $request){
        $items=DB::table('users')->where('email',$request->email)->first();
//print_r($items);
//var_export($items);
// {
//     "login": true,
//     "user": {
//     "id": 20,
//     "user_name": "y",
//     "email": "y",
//     "password": "y",
//     "created_at": null,
//     "updated_at": null
//     }
// }
//         return response()->json(['login'=>true,
//              'request'=>$request->password,
//              'items'=>$items->password,
//         ],200);
// exit;

        $hashed = Hash::make($request->password);
        if(Hash::check($items->password,$hashed)){
            return response()->json(['auth'=>true,
             'user'=>$items
        ],200);
        }else{
            return response()->json(['auth'=>false],200);
        }
    }
    // public function store(Request $request){
    //     $items=DB::table('users')->where('email',$request->email)->first();

    //     if(Hash::check($request->password,$items->password)){
    //         return response()->json(['login'=>true,
    //          'user'=>$items
    //     ],200);
    //     }else{
    //         return response()->json(['login'=>false],200);
    //     }
    // }
}
