<?php

use App\Http\Controllers\QuestaoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemUserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('users', SystemUserController::class);

Route::patch('users/{user}/status', [SystemUserController::class, 'changeStatus']);

// Route::get('users/{user}/status', [SystemUserController::class, 'changeStatus']); adiciionar

Route::apiResource('questao', QuestaoController::class);

// Route::put('questao/{questao}/update', [QuestaoController::class, 'update']);
Route::patch('questao/{questao}/setStatus', [QuestaoController::class, 'setStatus']);

