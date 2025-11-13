@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white rounded shadow mt-6">
    <h2 class="text-xl font-bold mb-4">✏️ Editar Tarea</h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tareas.update', $tarea) }}" method="POST" class="space-y-2">
        @csrf
        @method('PATCH')

        <input type="text" name="titulo" value="{{ old('titulo', $tarea->titulo) }}" placeholder="Título" class="border p-2 rounded w-full" required>
        <input type="text" name="categoria" value="{{ old('categoria', $tarea->categoria) }}" placeholder="Categoría" class="border p-2 rounded w-full">
        <select name="prioridad" class="border p-2 rounded w-full">
            <option value="alta" @if($tarea->prioridad=='alta') selected @endif>Alta</option>
            <option value="media" @if($tarea->prioridad=='media') selected @endif>Media</option>
            <option value="baja" @if($tarea->prioridad=='baja') selected @endif>Baja</option>
        </select>
        <input type="date" name="fecha_limite" value="{{ old('fecha_limite', $tarea->fecha_limite) }}" class="border p-2 rounded w-full">
        <textarea name="descripcion" placeholder="Descripción" class="border p-2 rounded w-full">{{ old('descripcion', $tarea->descripcion) }}</textarea>
        <label class="inline-flex items-center">
            <input type="checkbox" name="completada" @if($tarea->completada) checked @endif class="mr-2">
            Completada
        </label>
        <div class="flex space-x-2">
            <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition">Guardar cambios</button>
            <a href="{{ route('tareas.index') }}" class="px-4 py-2 border rounded hover:bg-gray
