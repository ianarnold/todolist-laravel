<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;

class TasksController extends Controller
{
    
    public function store(StoreTaskRequest $request)
    {
        $data = $request->only(['name', 'description']);
        Task::create($data);
        return redirect()->route('tasksview');
    }

    public function tasksView()
    {
        $tasks = Task::paginate(15);
        return view('welcome', ['tasks' => $tasks]);
    }

    public function editTaskView(Task $task)
    { 
        return view('edittask', ['task' => $task]);
    }

    public function deleteTask($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasksview');
    }

}
