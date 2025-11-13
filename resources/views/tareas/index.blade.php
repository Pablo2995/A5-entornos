@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded shadow mt-6">
    <h1 class="text-2xl font-bold mb-4">📋 Mi Lista de Tareas</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulario nueva tarea -->
    <form action="{{ route('tareas.store') }}" method="POST" class="mb-6 space-y-2">
        @csrf
        <div class="flex flex-col md:flex-row md:space-x-2 space-y-2 md:space-y-0">
            <input type="text" name="titulo" placeholder="Título" class="border p-2 rounded w-full" required>
            <input type="text" name="categoria" placeholder="Categoría" class="border p-2 rounded w-full">
            <select name="prioridad" class="border p-2 rounded w-full">
                <option value="alta">Alta</option>
                <option value="media" selected>Media</option>
                <option value="baja">Baja</option>
            </select>
            <input type="date" name="fecha_limite" class="border p-2 rounded w-full">
        </div>
        <textarea name="descripcion" placeholder="Descripción (opcional)" class="border p-2 rounded w-full mt-2"></textarea>
        <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition">➕ Agregar Tarea</button>
    </form>

    <!-- Lista de tareas -->
    <div class="space-y-2">
        @foreach($tareas as $tarea)
        <div class="flex justify-between items-center border p-2 rounded hover:bg-gray-50 transition">
            <div>
                <h2 class="font-bold @if($tarea->completada) line-through text-gray-400 @endif">{{ $tarea->titulo }}</h2>
                <p class="text-sm text-gray-500">{{ $tarea->categoria ?? 'Sin categoría' }} - {{ $tarea->prioridad }}</p>
                @if($tarea->descripcion)
                    <p class="text-gray-700">{{ $tarea->descripcion }}</p>
                @endif
            </div>
            <div class="flex space-x-2">
                <!-- Toggle completada -->
                <form action="{{ route('tareas.toggle', $tarea) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="px-3 py-1 rounded border hover:bg-gray-100 transition">
                        @if($tarea->completada) ✅ @else ⬜ @endif
                    </button>
                </form>

                <!-- Editar -->
                <a href="{{ route('tareas.edit', $tarea) }}" class="px-3 py-1 rounded border hover:bg-gray-100 transition">✏️</a>

                <!-- Eliminar -->
                <form action="{{ route('tareas.destroy', $tarea) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar esta tarea?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-3 py-1 rounded border hover:bg-red-100 hover:text-red-700 transition">🗑</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
