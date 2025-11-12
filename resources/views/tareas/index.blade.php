@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <!-- Formulario nueva tarea -->
    <form action="{{ route('tareas.store') }}" method="POST" class="mb-6 flex flex-col md:flex-row gap-3">
        @csrf
        <input type="text" name="titulo" placeholder="Título de la tarea" class="flex-1 p-3 rounded shadow border focus:outline-none focus:ring-2 focus:ring-purple-400" required>
        <input type="text" name="descripcion" placeholder="Descripción (opcional)" class="flex-1 p-3 rounded shadow border focus:outline-none focus:ring-2 focus:ring-purple-400">
        <button type="submit" class="bg-purple-600 text-white px-6 py-3 rounded shadow hover:bg-purple-700 transition duration-200">Añadir</button>
    </form>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-200 text-green-800 rounded shadow">
            {{ session('success') }}
        </div>
    @endif

    <!-- Lista de tareas -->
    <div class="grid gap-4">
        @foreach($tareas as $tarea)
        <div class="bg-white p-4 rounded-lg shadow flex justify-between items-center hover:shadow-lg transition duration-200">
            <div class="flex items-center gap-3">
                <form action="{{ route('tareas.toggle', $tarea) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <input type="checkbox" onChange="this.form.submit()" {{ $tarea->completed ? 'checked' : '' }} class="h-5 w-5 accent-purple-600">
                </form>
                <div>
                    <span class="{{ $tarea->completed ? 'line-through text-gray-400' : 'text-gray-900' }} font-semibold text-lg">{{ $tarea->titulo }}</span>
                    @if($tarea->descripcion)
                        <p class="{{ $tarea->completed ? 'line-through text-gray-400' : 'text-gray-600' }} text-sm">{{ $tarea->descripcion }}</p>
                    @endif
                </div>
            </div>
            <div class="flex gap-2">
                <button onclick="editTarea('{{ $tarea->id }}','{{ $tarea->titulo }}','{{ $tarea->descripcion }}')" class="px-3 py-1 bg-yellow-400 rounded hover:bg-yellow-500 text-white text-sm transition">Editar</button>
                <form action="{{ route('tareas.destroy', $tarea) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-3 py-1 bg-red-500 rounded hover:bg-red-600 text-white text-sm transition">Eliminar</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal edición -->
<div id="editModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-xl font-bold mb-4 text-purple-700">Editar Tarea</h2>
        <form id="editForm" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="titulo" id="editTitulo" class="w-full p-3 border rounded mb-2 focus:outline-none focus:ring-2 focus:ring-purple-400" required>
            <input type="text" name="descripcion" id="editDescripcion" class="w-full p-3 border rounded mb-4 focus:outline-none focus:ring-2 focus:ring-purple-400">
            <div class="flex justify-end gap-2">
                <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancelar</button>
                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">Guardar</button>
            </div>
        </form>
    </div>
</div>

<script>
function editTarea(id, titulo, descripcion){
    document.getElementById('editModal').classList.remove('hidden');
    document.getElementById('editTitulo').value = titulo;
    document.getElementById('editDescripcion').value = descripcion;
    document.getElementById('editForm').action = '/tareas/' + id;
}

function closeModal(){
    document.getElementById('editModal').classList.add('hidden');
}
</script>
@endsection
