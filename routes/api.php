<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'users'], function (){
//    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'storeUser']);
});

Route::group(['prefix' => 'fruits'], function (){
    Route::get('/', [FruitController::class, 'index']);
});
