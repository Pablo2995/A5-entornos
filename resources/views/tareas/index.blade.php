@extends('layouts.app')

@section('content')
    <h1 class="text-4xl font-extrabold text-center text-blue-700 mb-8">Lista de Tareas</h1>

    <div class="flex justify-end mb-6">
        <a href="{{ route('tareas.create') }}" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow hover:bg-blue-700 transition duration-200">
            + Nueva Tarea
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($tareas as $tarea)
            <div class="bg-white shadow-lg rounded-xl p-5 flex flex-col justify-between hover:shadow-2xl transition duration-300">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $tarea->titulo }}</h2>
                    <p class="text-gray-600 mb-4">{{ $tarea->descripcion }}</p>
                </div>
                <div class="flex justify-between items-center">
                    <a href="{{ route('tareas.edit', $tarea->id) }}" class="text-yellow-500 hover:text-yellow-600 font-medium transition duration-200">
                        Editar
                    </a>
                    <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-600 font-medium transition duration-200">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-gray-500 col-span-full text-center">No hay tareas aún. ¡Agrega una nueva!</p>
        @endforelse
    </div>
@endsection
