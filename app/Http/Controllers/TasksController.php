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
}
