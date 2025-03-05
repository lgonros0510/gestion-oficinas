<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Oficina;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function create(Oficina $oficina)
    {
        return view('empleados.create', compact('oficina'));
    }

    public function store(Request $request, Oficina $oficina)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'nullable|string|max:255',
            'rol' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'dni' => 'required|regex:/^\d{8}[A-Z]$/|unique:empleados,dni',
            'email' => 'required|email|unique:empleados,email',
        ]);

        $empleado = new Empleado($request->all());
        $empleado->oficina_id = $oficina->id;
        $empleado->save();

        dd($empleado->toArray());

        return redirect()->route('oficinas.show', $oficina)->with('success', 'Empleado creado con éxito.');
    }

    public function edit(Oficina $oficina, Empleado $empleado)
    {
        return view('empleados.edit', compact('oficina', 'empleado'));
    }

    public function update(Request $request, Oficina $oficina, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'nullable|string|max:255',
            'rol' => 'nullable|string|max:255',
            'fecha_nacimiento' => 'nullable|date',
            'dni' => 'required|regex:/^\d{8}[A-Z]$/|unique:empleados,dni,' . $empleado->id,
            'email' => 'required|email|unique:empleados,email,' . $empleado->id,
        ]);

        $empleado->update($request->all());

        return redirect()->route('oficinas.show', $oficina)->with('success', 'Empleado actualizado con éxito.');
    }

    public function destroy(Oficina $oficina, Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('oficinas.show', $oficina)->with('success', 'Empleado eliminado con éxito.');
    }
}
