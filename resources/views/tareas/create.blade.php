<h1>Nueva Tarea</h1>
<form action="{{ route('tareas.store') }}" method="POST">
    @csrf
    <input type="text" name="titulo" placeholder="Título" required>
    <textarea name="descripcion" placeholder="Descripción"></textarea>
    <button type="submit">Guardar</button>
</form>
<a href="{{ route('tareas.index') }}">Volver</a>
