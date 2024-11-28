<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $task->title) }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $task->description) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Estado</label>
        <select class="form-control" id="status" name="status" required>
            <option value="pending" {{ old('status', $task->status) == 'pending' ? 'selected' : '' }}>Pendiente</option>
            <option value="completed" {{ old('status', $task->status) == 'completed' ? 'selected' : '' }}>Completada</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar tarea</button>
</form>
