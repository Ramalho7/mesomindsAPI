<?php

use App\Http\Controllers\MateriasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemUserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('users', SystemUserController::class);

Route::apiResource('materias', MateriasController::class);

Route::patch('users/{user}/status', [SystemUserController::class, 'changeStatus']);

// Route::get('users/{user}/status', [SystemUserController::class, 'changeStatus']); adiciionar