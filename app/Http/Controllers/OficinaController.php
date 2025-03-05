<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
    public function index()
    {
        $oficinas = Oficina::all();
        return view('oficinas.index', compact('oficinas'));
    }

    public function create()
    {
        return view('oficinas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'nullable|string|max:255',
        ]);

        Oficina::create($request->all());

        return redirect()->route('oficinas.index')->with('success', 'Oficina creada con éxito.');
    }

    public function show(Oficina $oficina)
    {
        $oficina->load('empleados');
        return view('oficinas.show', compact('oficina'));
    }

    public function edit(Oficina $oficina)
    {
        return view('oficinas.edit', compact('oficina'));
    }

    public function update(Request $request, Oficina $oficina)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'nullable|string|max:255',
        ]);

        $oficina->update($request->all());

        return redirect()->route('oficinas.index')->with('success', 'Oficina actualizada con éxito.');
    }

    public function destroy(Oficina $oficina)
    {
        $oficina->delete();

        return redirect()->route('oficinas.index')->with('success', 'Oficina eliminada con éxito.');
    }
}
