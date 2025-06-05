<?php

use App\Http\Controllers\AutenticaController;
use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepinhoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/teste/{valor}', function ($valor) {
    return "Você digitou {$valor}";
});

Route::prefix('/keep')->group(function () {
    Route::get('/', [KeepinhoController::class, 'index'])->name('keep.index');

    Route::post('/gravar', [KeepinhoController::class, 'gravar'])->name('keep.gravar');

    Route::get('/editar/{nota}', [KeepinhoController::class, 'editar'])->name('keep.editar');

    Route::put('/editar', [KeepinhoController::class, 'editar'])->name('keep.editarGravar');

    Route::delete('/apagar/{nota}', [KeepinhoController::class, 'apagar'])->name('keep.apagar');

    Route::get('/lixeira', [KeepinhoController::class, 'lixeira'])->name('keep.lixeira');

    Route::get('/restaurar/{nota}', [KeepinhoController::class, 'restaurar'])->name('keep.restaurar');
});


Route::resource('produtos', ProdutosController::class);

require __DIR__ . '/auth.php';
