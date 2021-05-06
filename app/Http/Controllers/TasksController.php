<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;

class TasksController extends Controller
{
    
    // SALVAR TASK
    public function store(StoreTaskRequest $request)
    {
        $data = $request->only(['name', 'description']);
        Task::create($data);
        return redirect()->route('tasksview');
    }

    // LISTAR TODAS AS TASKS DE 15 EM 15 COM O PAGINATE
    public function tasksView()
    {
        $tasks = Task::paginate(15);
        return view('welcome', ['tasks' => $tasks]);
    }

    // RETORNAR VIEW DE EDIÇÃO DE TASK
    public function editTaskView(Task $task)
    { 
        return view('edittask', ['task' => $task]);
    }

    // EDITAR TASK
    public function editTask(Task $task, Request $request)
    {
        $data = $request->only(['name', 'description']);
        $task->update($data);
        return redirect()->route('tasksview');
    }

    // DELETAR TASK
    public function deleteTask(Task $task)
    {
        // $task = Task::findOrFail($id); --> (Task $task) já faz o FindOrFail...
        $task->delete();
        return redirect()->route('tasksview');
    }

}
