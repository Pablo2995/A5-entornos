<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::orderBy('created_at', 'desc')->get();
        return view('tareas.index', compact('tareas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'prioridad' => 'required|in:alta,media,baja',
            'categoria' => 'nullable|string|max:255',
            'fecha_limite' => 'nullable|date',
            'completada' => 'boolean',
        ]);

        $data = $request->all();
        $data['completada'] = $request->has('completada');

        Tarea::create($data);

        return redirect()->route('tareas.index')->with('success', 'Tarea creada correctamente.');
    }

    public function edit(Tarea $tarea)
    {
        return view('tareas.edit', compact('tarea'));
    }

    public function update(Request $request, Tarea $tarea)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'prioridad' => 'required|in:alta,media,baja',
            'categoria' => 'nullable|string|max:255',
            'fecha_limite' => 'nullable|date',
            'completada' => 'boolean',
        ]);

        $data = $request->all();
        $data['completada'] = $request->has('completada');

        $tarea->update($data);

        return redirect()->route('tareas.index')->with('success', 'Tarea actualizada correctamente.');
    }

    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tareas.index')->with('success', 'Tarea eliminada correctamente.');
    }

    public function toggle(Tarea $tarea)
    {
        $tarea->completada = !$tarea->completada;
        $tarea->save();
        return redirect()->route('tareas.index');
    }
}
