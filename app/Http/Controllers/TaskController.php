<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:pending,completed',
        ]);
    
        // Crear la tarea con los datos del formulario
        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);
    
        // Redirigir a la lista de tareas con un mensaje de éxito
        return redirect()->route('tasks.index')->with('success', 'Tarea creada.');
    }
    


 
    public function edit($id)
{
    // Buscar la tarea por su ID
    $task = Task::findOrFail($id);

    // Retornar la vista de edición con la tarea
    return view('tasks.edit', compact('task'));
}

   
public function update(Request $request, $id)
{
    // Validación
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'status' => 'required|in:pending,completed',
    ]);

    // Buscar la tarea y actualizarla
    $task = Task::findOrFail($id);
    $task->update([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'status' => $request->input('status'),
    ]);

    // Redirigir con mensaje de éxito
    return redirect()->route('tasks.index')->with('success', 'Tarea actualizada con éxito.');
}


    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Tarea eliminada');
    }
}
