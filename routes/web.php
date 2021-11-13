<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefasController;
use App\Models\Tarefas;

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

Route::get('/', function () { 
    $tarefas = Tarefas::get();
    return view ('todolist')->with(['tarefas' => $tarefas]);
});

Route::get('todolist/{id}', [TarefasController::class, 'readOne']);

Route::get('todolist', [TarefasController::class, 'index']);
Route::post('todolist', [TarefasController::class, 'create'])->name('registrar-tarefa');

Route::get('todolist/{id}',[TarefasController::class, 'edit']);
Route::post('todolist/{id}',[TarefasController::class, 'update'])->name('atualizar-tarefa');

Route::get('/{id}', [TarefasController::class, 'delete']);
Route::post('/{id}', [TarefasController::class, 'destroy'])->name('excluir-tarefa');
?>