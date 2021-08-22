<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationsController;



// Route::post('/v1/users/registration',[UsersController::class,'post']);

Route::post('/v1/users/registration',[RegisterController::class,'post']);
Route::get('/v1/users',[UsersController::class,'get']);
Route::post('/v1/login',[LoginController::class,'post']);
// Route::get('/v1/shops',[ShopsController::class,'index']);
Route::apiResource('/v1/shops',ShopsController::class);
// Route::get('/v1/shops/:id',[ShopsController::class,'detail']);
Route::post('/v1/shops/{shop_id}/like',[LikesController::class,'post']);

// Route::get('/v1/shops/{shop_id}/like',[LikesController::class,'first_check']);
Route::post('/v1/likes',[LikesController::class,'index']);
Route::delete('/v1/likes',[LikesController::class,'delete']);


