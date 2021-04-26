<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    
    public function store(Request $request)
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
