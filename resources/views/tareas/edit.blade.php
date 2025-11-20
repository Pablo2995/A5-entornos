@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded shadow mt-6">
    <h1 class="text-2xl font-bold mb-4">✏️ Editar Tarea</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4 shadow">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('tareas.update', $tarea) }}" method="POST" class="space-y-3">
        @csrf
        @method('PUT')

        <input type="text" name="titulo" value="{{ $tarea->titulo }}" 
               class="border p-2 rounded w-full" required>

        <input type="text" name="categoria" value="{{ $tarea->categoria }}" 
               class="border p-2 rounded w-full">

        <select name="prioridad" class="border p-2 rounded w-full">
            <option value="alta"  {{ $tarea->prioridad == 'alta' ? 'selected' : '' }}>Alta</option>
            <option value="media" {{ $tarea->prioridad == 'media' ? 'selected' : '' }}>Media</option>
            <option value="baja"  {{ $tarea->prioridad == 'baja' ? 'selected' : '' }}>Baja</option>
        </select>

        <input type="date" name="fecha_limite" value="{{ $tarea->fecha_limite }}" 
               class="border p-2 rounded w-full">

        <textarea name="descripcion" class="border p-2 rounded w-full">{{ $tarea->descripcion }}</textarea>

        <label class="flex items-center space-x-2">
            <input type="checkbox" name="completada" {{ $tarea->completada ? 'checked' : '' }}>
            <span>Completada</span>
        </label>

        <button type="submit"
            class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition w-full">
            Guardar cambios
        </button>
    </form>

    <div class="text-center mt-6">
        <a href="https://github.com/Pablo2995/A5-entornos" target="_blank"
           class="text-purple-700 underline hover:text-purple-900">
           🔗 Ver repositorio en GitHub
        </a>
    </div>
</div>
@endsection
