<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


Route::apiResource('services', \App\Http\Controllers\ServiceController::class);
Route::apiResource('bookings', \App\Http\Controllers\BookingController::class);

Route::get('/admin/bookings', [\App\Http\Controllers\BookingController::class, 'index'])->middleware('auth:sanctum');