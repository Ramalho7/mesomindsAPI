<?php

use App\Http\Controllers\ContentImageController;
use App\Http\Controllers\ContentTagController;
use App\Http\Controllers\ContentTypeController;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\SystemUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function () {
    Route::apiResource('users', SystemUserController::class);
    Route::patch('users/{user}/status', [SystemUserController::class, 'changeStatus']);

    Route::get('materias/filter', [App\Http\Controllers\MateriasController::class, 'index']);

    Route::patch('materias/{materia}/status', [MateriasController::class, 'changeStatus']);

    Route::apiResource('materias', MateriasController::class);

    Route::apiResource('content-images', ContentImageController::class);
    Route::apiResource('conteudos', ConteudoController::class);

    Route::apiResource('tiposconteudo', ContentTypeController::class);

    Route::apiResource('tagsconteudo', ContentTagController::class);
});
