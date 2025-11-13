@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Mensajes de éxito -->
    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulario para nueva tarea -->
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4 text-purple-700">➕ Nueva Tarea</h2>
        <form action="{{ route('tareas.store') }}" method="POST" class="space-y-4">
            @csrf
            <div class="flex flex-col md:flex-row md:space-x-4">
                <input type="text" name="titulo" placeholder="Título" class="flex-1 p-2 border rounded" required>
                <input type="text" name="categoria" placeholder="Categoría" class="flex-1 p-2 border rounded">
                <select name="prioridad" class="p-2 border rounded">
                    <option value="alta">Alta</option>
                    <option value="media" selected>Media</option>
                    <option value="baja">Baja</option>
                </select>
                <input type="date" name="fecha_limite" class="p-2 border rounded">
            </div>
            <textarea name="descripcion" placeholder="Descripción (opcional)" class="w-full p-2 border rounded"></textarea>
            <div class="flex space-x-2">
                <button type="submit" class="bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800 transition">Crear</button>
                <a href="{{ route('tareas.index') }}" class="px-4 py-2 border rounded hover:bg-gray-100 transition">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection
