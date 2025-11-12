<h1>Lista de Tareas</h1>
<a href="{{ route('tareas.create') }}">Nueva Tarea</a>
<ul>
@foreach($tareas as $tarea)
    <li>
        <strong>{{ $tarea->titulo }}</strong> - {{ $tarea->descripcion }}
        <a href="{{ route('tareas.edit', $tarea) }}">Editar</a>
        <form action="{{ route('tareas.destroy', $tarea) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </li>
@endforeach
</ul>
