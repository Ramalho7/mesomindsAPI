<?php

use App\Http\Controllers\QuestaoController;
use App\Models\Questao;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('questao', function () {
    return 'Questao::all()';
});


Route::get('/saudacao', function () {
    return 'Olá, Mesominds! Esta é sua primeira rota.';
});
