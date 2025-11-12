@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Lista de Tareas</h1>

    <div class="flex justify-end mb-4">
        <a href="{{ route('tareas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Nueva Tarea
        </a>
    </div>

    <div class="bg-white shadow-md rounded p-4">
        @forelse($tareas as $tarea)
            <div class="border-b last:border-b-0 py-2 flex justify-between items-center">
                <div>
                    <h2 class="font-semibold text-lg">{{ $tarea->titulo }}</h2>
                    <p class="text-gray-600">{{ $tarea->descripcion }}</p>
                </div>
                <div class="flex space-x-2">
                    <a href="{{ route('tareas.edit', $tarea->id) }}" class="text-yellow-500 hover:text-yellow-600">Editar</a>
                    <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-600">Eliminar</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No hay tareas aún.</p>
        @endforelse
    </div>
@endsection
