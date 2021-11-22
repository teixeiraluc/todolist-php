<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tarefas;

class TarefasController extends Controller { 

    /*******************************************/
    /* Função para redirecionamento a homepage */
    /*******************************************/
    
    public function index(){
        return view('/');
    }
    
    /*****************************/
    /* Inserindo dados na tabela */
    /*****************************/
    public function create (Request $request) {
        Tarefas::create([
            'task'=>$request->task,
            'comment'=>$request->comment,
            'conclusion_date'=>$request->conclusion_date,
            'check'=>false
        ]);
        return redirect('/')->with('status', 'A tarefa foi adicionada com sucesso!');
    }

    /***************************/
    /* Lendo um registro do BD */
    /***************************/
    public function readOne ($id){
        $tasks = Tarefas::findOrFail($id);
        return view ('todolist.show', ['tasks' => $tasks]);
    }

    /*******************************/
    /* Atualizando dados da tabela */
    /*******************************/
    public function edit ($id){
        $task = Tarefas::findOrFail($id);
        return view ('todolist.edit', ['task', $task]);
    }

    public function update(Request $request, $id){
        $task = Tarefas::findOrFail($id);

        $task->update([
            'task'=>$request->task,
            'comment'=>$request->comment,
            'conclusion_date'=>$request->conclusion_date,
            'check'=>$request->check
        ]);

        return redirect('/')->with('status', 'A tarefa foi atualizada com sucesso!');
    }

    /****************************/
    /* Apagando dados da tabela */
    /****************************/
    public function delete ($id){
        $task = Tarefas::findOrFail($id);
        return view ('/', ['task', $task]);
    }

    public function destroy ($id){
        $task = Tarefas::findOrFail($id);
        $task->delete();
        return redirect('/')->with('status', 'A tarefa foi excluída com sucesso!');
    }

}
?>