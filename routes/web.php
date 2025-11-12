<?php
use App\Http\Controllers\TareaController;

Route::get('/tareas', [TareaController::class, 'index'])->name('tareas.index');
Route::post('/tareas', [TareaController::class, 'store'])->name('tareas.store');
Route::put('/tareas/{tarea}', [TareaController::class, 'update'])->name('tareas.update');
Route::delete('/tareas/{tarea}', [TareaController::class, 'destroy'])->name('tareas.destroy');
Route::patch('/tareas/{tarea}/toggle', [TareaController::class, 'toggle'])->name('tareas.toggle');
