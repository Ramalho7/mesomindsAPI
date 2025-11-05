<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContentTagController;
use App\Http\Controllers\ContentTypeController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SystemUserController;
use App\Models\Content;
use App\Models\ContentTag;
use App\Models\ContentType;
use App\Models\Question;
use Illuminate\Support\Facades\Route;

// model binds
Route::model('tiposconteudo', ContentType::class);
Route::model('tagsconteudo', ContentTag::class);
Route::model('conteudo', Content::class);
Route::model('questo', Question::class);

// end-points auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// end-points conteudos public
Route::get('conteudos', [ContentController::class, 'index']); 
Route::get('conteudos/{conteudo}', [ContentController::class, 'show']); 

Route::get('tiposconteudo', [ContentTypeController::class, 'index']); 
Route::get('tagsconteudo', [ContentTagController::class, 'index']); 

// end-points questao public
Route::get('questoes', [QuestionController::class, 'index']);

Route::middleware('auth:api')->group(function () {

    // end-points auth
    Route::post('/logout', [AuthController::class,'logout']);
    Route::post('/validatetoken', [AuthController::class,'validateToken']);

    // end-points user
    Route::put('/users/{user}/password', [SystemUserController::class, 'updatePassword']);
    Route::apiResource('users', SystemUserController::class);
    Route::patch('users/{user}/status', [SystemUserController::class, 'changeStatus']);

    // end-points materia
    Route::get('materias/filter', [MateriasController::class, 'index']);
    Route::patch('materias/{materia}/status', [MateriasController::class, 'changeStatus']);
    Route::apiResource('materias', MateriasController::class);

    // end-points conteudos
    Route::patch('conteudos/{conteudo}/status', [ContentController::class, 'changeStatus']);
    Route::apiResource('conteudos', ContentController::class)->except('index', 'show');

    Route::patch('tiposconteudo/{tiposconteudo}/status', [ContentTypeController::class, 'changeStatus']);
    Route::apiResource('tiposconteudo', ContentTypeController::class)->except('index');

    Route::patch('tagsconteudo/{tagsconteudo}/status', [ContentTagController::class, 'changeStatus']);
    Route::apiResource('tagsconteudo', ContentTagController::class)->except('index');

    // end-points questao
    Route::apiResource('questoes', QuestionController::class)->except('index');
});