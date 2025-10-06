<?php

use App\Http\Controllers\MateriasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemUserController;

Route::middleware('auth:api')->group(function () {
    Route::apiResource('users', SystemUserController::class);
    Route::patch('users/{user}/status', [SystemUserController::class, 'changeStatus']);

    Route::get('materias/filter', [App\Http\Controllers\MateriasController::class, 'index']);

    Route::patch('materias/{materia}/status', [MateriasController::class, 'changeStatus']);

    Route::apiResource('materias', MateriasController::class);
});
