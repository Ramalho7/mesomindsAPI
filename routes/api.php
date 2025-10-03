<?php

use App\Http\Controllers\MateriasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemUserController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::apiResource('users', SystemUserController::class);
    Route::apiResource('materias', MateriasController::class);
    Route::patch('materias/{materia}/status', [MateriasController::class, 'changeStatus']);
    Route::patch('users/{user}/status', [SystemUserController::class, 'changeStatus']);
});