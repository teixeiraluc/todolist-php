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

Route::post('todolist', [TarefasController::class, 'create'])->name('registrar-tarefa');

Route::resource('/tasks', TasksController::class);
?>