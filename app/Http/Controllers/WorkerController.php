<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    // Método para mostrar todos los trabajadores
    public function workers()
    {
        $workers = Worker::all();
        return view('workers.workers', compact('workers'));
    }

    // Método para mostrar el formulario de creación de trabajadores
    public function create()
    {
        return view('workers.create');
    }

    // Método para almacenar un nuevo trabajador
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'required|email|unique:workers,email',
        ]);

        // Creación del trabajador en la base de datos
        $worker = Worker::create([
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'email' => $request->input('email'),
        ]);

        // Redireccionamiento con un mensaje de éxito
        return redirect('/workers')->with('success', 'Trabajador agregado correctamente');
    }
}
