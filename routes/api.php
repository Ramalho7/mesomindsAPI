<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContentTagController;
use App\Http\Controllers\ContentTypeController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\MeController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\QuestionCollectionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\StudentAnswerController;
use App\Http\Controllers\SystemUserController;
use App\Mail\WelcomeEmail;
use App\Models\Content;
use App\Models\ContentTag;
use App\Models\ContentType;
use App\Models\Question;
use App\Models\QuestionCollection;
use App\Models\StudentAnswer;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

// Route::get('/test-email', function () {
//     $email = 'adryelll85@gmail.com';
//     $name = 'Adryelll';
//     Mail::to($email)->send(new WelcomeEmail($name));
// });

// Model bindings
Route::model('tiposconteudo', ContentType::class);
Route::model('tagsconteudo', ContentTag::class);
Route::model('conteudo', Content::class);
Route::model('questo', Question::class);
Route::model('questoescolecao', QuestionCollection::class);
Route::model('respostaaluno', StudentAnswer::class);

// Public endpoints
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/refresh', [AuthController::class, 'refresh']);

    Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])
        ->name('password.email');

    Route::post('/reset-password', [PasswordResetController::class, 'reset'])
        ->name('password.update');
});

Route::prefix('conteudos')->group(function () {
    Route::get('/', [ContentController::class, 'index']);
    Route::get('/{conteudo}', [ContentController::class, 'show']);
});

Route::prefix('tiposconteudo')->group(function () {
    Route::get('/', [ContentTypeController::class, 'index']);
});

Route::prefix('tagsconteudo')->group(function () {
    Route::get('/', [ContentTagController::class, 'index']);
});

Route::prefix('questoes')->group(function () {
    Route::get('/', [QuestionController::class, 'index']);
});

Route::prefix('questoescolecao')->group(function () {
    Route::get('/', [QuestionCollectionController::class, 'index']);
    Route::get('/{questoescolecao}', [QuestionCollectionController::class, 'show']);
});

// Authenticated endpoints
Route::middleware('auth:api')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('/me', [MeController::class, 'me']);
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/validatetoken', [AuthController::class, 'validateToken']);
        Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {

            $request->fulfill();

            return response()->json([
                'success' => true,
                'message' => 'E-mail verificado com sucesso.',
            ]);

        })->middleware(['auth', 'signed'])->name('verification.verify');
    });

    Route::prefix('users')->middleware('email.verified.30days')->group(function () {
        Route::get('/', [SystemUserController::class, 'index']);
        Route::post('/', [SystemUserController::class, 'store']);
        Route::get('/deleted', [SystemUserController::class, 'viewAllDeleted']);
        Route::get('/createddaily', [SystemUserController::class, 'viewCreatedDaily']);
        Route::patch('/{user}/password', [SystemUserController::class, 'updatePassword']);
        Route::patch('/{user}/status', [SystemUserController::class, 'changeStatus']);
        Route::put('/{user}', [SystemUserController::class, 'update']);
        Route::delete('/{user}', [SystemUserController::class, 'destroy']);
        Route::get('/{users}', [SystemUserController::class, 'show']);
    });

    Route::prefix('materias')->group(function () {
        Route::get('/filter', [MateriasController::class, 'index']);
        Route::patch('/{materia}/status', [MateriasController::class, 'changeStatus']);
        Route::apiResource('/', MateriasController::class);
    });

    Route::prefix('conteudos')->group(function () {
        Route::patch('/{conteudo}/status', [ContentController::class, 'changeStatus']);
        Route::apiResource('/', ContentController::class)->except('index', 'show');
    });

    Route::prefix('tiposconteudo')->group(function () {
        Route::patch('/{tiposconteudo}/status', [ContentTypeController::class, 'changeStatus']);
        Route::apiResource('/', ContentTypeController::class)->except('index');
    });

    Route::prefix('tagsconteudo')->group(function () {
        Route::patch('/{tagsconteudo}/status', [ContentTagController::class, 'changeStatus']);
        Route::apiResource('/', ContentTagController::class)->except('index');
    });

    Route::prefix('questoes')->group(function () {
        Route::patch('/{questo}/status', [QuestionController::class, 'changeStatus']);
        Route::apiResource('/', QuestionController::class)->except('index');
    });

    Route::prefix('questoescolecao')->group(function () {
        Route::patch('/{questoescolecao}/status', [QuestionCollectionController::class, 'changeStatus']);
        Route::apiResource('/', QuestionCollectionController::class)->except('index', 'show');
    });

    Route::prefix('respostasalunos')->group(function () {
        Route::post('/{respostaaluno}/corrigir', [StudentAnswerController::class, 'correct']);
        Route::apiResource('/', StudentAnswerController::class);
    });
});
