<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationsController;





Route::post('/v1/users/registration',[RegisterController::class,'post']);
Route::get('/v1/users',[UsersController::class,'get']);
Route::post('/v1/login',[LoginController::class,'post']);

Route::post('/v1/like',[LikesController::class,'post']);
Route::apiResource('/v1/shops',ShopsController::class);

Route::post('/v1/getshops',[ShopsController::class,'get']);



Route::post('/v1/likes',[LikesController::class,'index']);
Route::delete('/v1/like',[LikesController::class,'delete']);

Route::post('/v1/mypage/reservations',[ReservationsController::class,'index']);
Route::post('/v1/reservations',[ReservationsController::class,'post']);



