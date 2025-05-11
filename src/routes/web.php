<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{task}', [TaskController::class, 'getById'])->name('tasks.show');

Route::get('/tasks', [TaskController::class, 'getAll'])->name('tasks.index');

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::get('/tasks/{task}/edit', [TaskController::class, 'editShow'])->name('tasks.edit.show');

Route::put('/tasks/{task}', [TaskController::class, 'editHandle'])->name('tasks.edit.handle');

Route::delete('/tasks/{task}', [TaskController::class, 'delete'])->name('tasks.destroy');

Route::put('tasks/{task}/toggle-complete', [TaskController::class, 'toggle'])->name('tasks.toggle-complete');
