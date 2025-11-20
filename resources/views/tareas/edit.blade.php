@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white dark:bg-gray-800 p-6 rounded shadow mt-6">

    <h2 class="text-2xl font-bold mb-4 text-purple-700 dark:text-purple-300">
        ✏️ Editar Tarea
    </h2>

    <!-- Mensaje de éxito -->
    @if(session('success'))
    <div class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-4 py-2 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <!-- Formulario -->
    <form action="{{ route('tareas.update', $tarea) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <label class="block">
            <span class="font-semibold">Título</span>
            <input type="text" name="titulo" value="{{ $tarea->titulo }}" required
                class="w-full p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </label>

        <label class="block">
            <span class="font-semibold">Categoría</span>
            <input type="text" name="categoria" value="{{ $tarea->categoria }}"
                class="w-full p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </label>

        <label class="block">
            <span class="font-semibold">Prioridad</span>
            <select name="prioridad"
                class="w-full p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <option value="alta"   @if($tarea->prioridad == 'alta') selected @endif>Alta</option>
                <option value="media"  @if($tarea->prioridad == 'media') selected @endif>Media</option>
                <option value="baja"   @if($tarea->prioridad == 'baja') selected @endif>Baja</option>
            </select>
        </label>

        <label class="block">
            <span class="font-semibold">Fecha límite</span>
            <input type="date" name="fecha_limite" value="{{ $tarea->fecha_limite }}"
                class="w-full p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        </label>

        <label class="block">
            <span class="font-semibold">Descripción</span>
            <textarea name="descripcion" rows="3"
                class="w-full p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ $tarea->descripcion }}</textarea>
        </label>

        <div class="flex space-x-2">
            <button type="submit"
                class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition">
                💾 Guardar Cambios
            </button>

            <a href="{{ route('tareas.index') }}"
                class="px-4 py-2 border rounded hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
