<?php

use App\Http\Controllers\HeartAttackController;
use App\Http\Controllers\StrokeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HeartAttackController::class, 'input']);
Route::prefix('heart-attack')->group(function () {
    Route::get('/input', [HeartAttackController::class, 'input']);
    Route::get('/result', [HeartAttackController::class, 'result']);
});
Route::prefix('stroke')->group(function () {
    Route::get('/input', [StrokeController::class, 'input']);
    Route::get('/result', [StrokeController::class, 'result']);
});
