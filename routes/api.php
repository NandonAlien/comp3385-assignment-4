<?php

use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/api/v1/movies', [MovieController::class, 'index']);
Route::post('/api/v1/movies', [MovieController::class, 'store']);