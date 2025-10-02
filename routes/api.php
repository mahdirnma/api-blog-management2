<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('categories', CategoryController::class)->except(['index', 'show']);
    Route::apiResource('posts', PostController::class)->except(['index', 'show']);
});
Route::apiResource('categories', CategoryController::class)->only(['index', 'show']);
Route::apiResource('posts', PostController::class)->only(['index', 'show']);
Route::post('/auth',LoginController::class)->name('login');
