<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí definimos todas las rutas de la aplicación de tareas.
|
*/

// Redirige la raíz al listado de tareas
Route::get('/', function () {
    return redirect()->route('tareas.index');
});

// Rutas CRUD para Tarea, excepto "show"
Route::resource('tareas', TareaController::class)->except(['show']);

// Ruta para marcar tarea como completada / no completada
Route::patch('tareas/{tarea}/toggle', [TareaController::class, 'toggle'])->name('tareas.toggle');
