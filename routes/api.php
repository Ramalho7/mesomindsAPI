<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContentTagController;
use App\Http\Controllers\ContentTypeController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\SystemUserController;
use App\Models\ContentType;
use Illuminate\Support\Facades\Route;

Route::model('tiposconteudo', ContentType::class);

Route::middleware('auth:api')->group(function () {
    Route::apiResource('users', SystemUserController::class);
    Route::patch('users/{user}/status', [SystemUserController::class, 'changeStatus']);

    Route::get('materias/filter', [App\Http\Controllers\MateriasController::class, 'index']);

    Route::patch('materias/{materia}/status', [MateriasController::class, 'changeStatus']);

    Route::apiResource('materias', MateriasController::class);

    Route::patch('conteudos/{conteudo}/status', [ContentController::class, 'changeStatus']);
    Route::apiResource('conteudos', ContentController::class);

    Route::patch('tiposconteudo/{tiposconteudo}/status', [ContentTypeController::class, 'changeStatus']);   
    Route::apiResource('tiposconteudo', ContentTypeController::class);

    Route::apiResource('tagsconteudo', ContentTagController::class);

});