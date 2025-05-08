<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function getAll(): View
    {
        return view('index')->with('tasks', Task::latest()->get());
    }

    public function getById($id): View
    {
        return view('show', ['task' => Task::findOrFail($id)]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => 'required | max:255',
            'description' => 'required',
            'long_description' => 'required'
        ]);

        $task = new Task();
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->long_description = $data['long_description'];

        $task->save();

        return redirect()->route('tasks.show', ['id' => $task->id]);
    }
}
