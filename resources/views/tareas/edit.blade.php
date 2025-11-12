<h1>Editar Tarea</h1>
<form action="{{ route('tareas.update', $tarea) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="titulo" value="{{ $tarea->titulo }}" required>
    <textarea name="descripcion">{{ $tarea->descripcion }}</textarea>
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('tareas.index') }}">Volver</a>
