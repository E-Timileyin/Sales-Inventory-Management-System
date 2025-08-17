<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// API Routes
Route::apiResource('products', ProductController::class);

// Default Laravel Sanctum route
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});