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
        ]);

        Tarea::create($request->all());
        return redirect()->back()->with('success', 'Tarea creada correctamente.');
    }

    public function update(Request $request, Tarea $tarea)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $tarea->update($request->all());
        return redirect()->back()->with('success', 'Tarea actualizada correctamente.');
    }

    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->back()->with('success', 'Tarea eliminada correctamente.');
    }

    public function toggle(Tarea $tarea)
    {
        $tarea->completed = !$tarea->completed;
        $tarea->save();
        return redirect()->back();
    }
}
