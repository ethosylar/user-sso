<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// User registration
Route::post('/register', [UserController::class, 'register']);

// User login
Route::post('/login', [UserController::class, 'login']);

// User profile
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth:api');
