<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationsController;



Route::post('/v1/users/registration',[UsersController::class,'post']);

Route::post('users/registration',[RegisterController::class,'post']);
// Route::get('/v1/users',[LoginController::class,'post']);
Route::post('/v1/login',[LoginController::class,'post']);
// Route::get('/v1/users',[LoginController::class,'get']);


Route::apiResource('/v1/shops',ShopsController::class);


