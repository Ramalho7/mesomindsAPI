<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ContentTagController;
use App\Http\Controllers\ContentTypeController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\MeController;
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
use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
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

    Route::post('/forgot-password', function (Request $request) {
        $request->validate(['email' => 'required|email']);

        $status = Password::broker('system_users')->sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? response()->json(['message' => __($status)], 200)
            : response()->json(['message' => __($status)], 422);
    })->name('password.email');

    Route::post('/reset-password', function (Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::broker('system_users')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? response()->json(['message' => __($status)], 200)
            : response()->json(['message' => __($status)], 422);
    })->name('password.update');
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
    });

    Route::prefix('users')->group(function () {
        Route::patch('/{user}/password', [SystemUserController::class, 'updatePassword']);
        Route::patch('/{user}/status', [SystemUserController::class, 'changeStatus']);
        Route::apiResource('/', SystemUserController::class);
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
