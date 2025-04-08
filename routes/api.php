<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PostController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    // User routes
    Route::get('/user', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Post routes
    Route::apiResource('posts', PostController::class);
});