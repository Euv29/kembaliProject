<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ComentarioController,
    ProfileController,
    PerguntaController,
    DisciplinaController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* User */
Route::middleware('auth')->group(function () {
    Route::get('/perfil/editar', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Pergunta */
Route::get('/', [PerguntaController::class, 'index'])
    ->name('index.pergunta')
    ->middleware(['auth']);

Route::get('/perguntas/criar', [PerguntaController::class, 'create'])
    ->name('create.pergunta')
    ->middleware(['auth']);

Route::get('/perguntas/{id}', [PerguntaController::class, 'show'])->middleware(['auth']);;

Route::post('/perguntas', [PerguntaController::class, 'store'])
    ->name('store.pergunta')
    ->middleware(['auth']);

Route::get('/dashboard', [PerguntaController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware(['auth']);

Route::get('/perfil/{id}/{name}', [PerguntaController::class, 'perfil'])
    ->middleware(['auth']);

/* Comentário */
Route::post('/comentarios/pergunta={id}', [ComentarioController::class, 'store']);

/* Disciplina */
Route::get('/criar/disciplina', [DisciplinaController::class, 'creaste'])
    ->name('create.disciplina')
    ->middleware(['auth']);

require __DIR__ . '/auth.php';