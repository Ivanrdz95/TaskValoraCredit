<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Ruta para listar todas las tareas (vista principal)
Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

// Ruta para mostrar el formulario de creación de tareas
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

// Ruta para guardar una nueva tarea
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

// Ruta para mostrar el formulario de edición de una tarea específica
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');


// Ruta para actualizar una tarea específica
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

// Ruta para eliminar una tarea específica
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
