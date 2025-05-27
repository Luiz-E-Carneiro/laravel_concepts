<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AutenticaController;
use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepinhoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Olá, professor! Acesse /aluno e veja a magia da programação :)';
});

Route::get('/teste/{valor}', function($valor){
    return "Você digitou {$valor}";   
});

Route::prefix('/keep')->group(function (){
    Route::get('/', [KeepinhoController::class,'index'])->name('keep.index');

    Route::post('/gravar', [KeepinhoController::class, 'gravar'])->name('keep.gravar');

    Route::get('/editar/{nota}', [KeepinhoController::class, 'editar'])->name('keep.editar');

    Route::put('/editar', [KeepinhoController::class, 'editar'])->name('keep.editarGravar');

    Route::delete('/apagar/{nota}', [KeepinhoController::class, 'apagar'])->name('keep.apagar');

    Route::get('/lixeira', [KeepinhoController::class, 'lixeira'])->name('keep.lixeira');
    
    Route::get('/restaurar/{nota}', [KeepinhoController::class, 'restaurar'])->name('keep.restaurar');

});


Route::get('/autentica', [AutenticaController::class, 'index'])->name('autentica.index');
Route::post('/autentica/gravar', [AutenticaController::class, 'gravar'])->name('autentica.gravar');

Route::get('/autentica/login', [AutenticaController::class, 'login'])->name('autentica.login');
Route::post('/autentica/login', [AutenticaController::class, 'login']);


Route::prefix('/aluno')->group(function () {
    Route::get('/', [AlunoController::class,'index'])->name('aluno.index');

    Route::post('/gravar', [AlunoController::class, 'gravar'])->name('aluno.gravar');

    Route::get('/editar/{aluno}', [AlunoController::class, 'editar'])->name('aluno.editar');

    Route::put('/editar', [AlunoController::class, 'editar'])->name('aluno.editarGravar');

    Route::get('/deletar/{aluno}', [AlunoController::class, 'deletar'])->name('aluno.deletar');
});