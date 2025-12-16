<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnggaranController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\StatistikController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/anggaran', [AnggaranController::class, 'index']);
    Route::post('/anggaran', [AnggaranController::class, 'store']);
    Route::put('/anggaran/{id}', [AnggaranController::class, 'update']);
    Route::delete('/anggaran/{id}', [AnggaranController::class, 'destroy']);

    Route::get('/target', [TargetController::class, 'index']);
    Route::post('/target', [TargetController::class, 'store']);
    Route::put('/target/{id}', [TargetController::class, 'update']);
    Route::delete('/target/{id}', [TargetController::class, 'destroy']);

    Route::get('/statistik', [StatistikController::class, 'index']);
    Route::post('/statistik', [StatistikController::class, 'store']);
    Route::delete('/statistik/{id}', [StatistikController::class, 'destroy']);
});
