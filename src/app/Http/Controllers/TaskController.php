<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
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

    public function getById(Task $task): View
    {
        return view('show', ['task' => $task]);
    }

    public function store(TaskRequest $request): RedirectResponse
    {
        // $data = $request->validated();

        // $task = new Task();
        // $task->title = $data['title'];
        // $task->description = $data['description'];
        // $task->long_description = $data['long_description'];

        // $task->save();
        $task = Task::create($request->validated());

        return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task create successfully !');
    }

    public function editShow(Task $task): View
    {
        return view('edit', ['task' => $task]);
    }

    public function editHandle(Task $task, TaskRequest $request): RedirectResponse
    {
        // $data = $request->validated();

        // $task->title = $data['title'];
        // $task->description = $data['description'];
        // $task->long_description = $data['long_description'];

        // $task->save();
        $task->update($request->validated());

        return redirect()->route('tasks.show', ['task' => $task->id])->with('success', 'Task updated successfully !');
    }
}
