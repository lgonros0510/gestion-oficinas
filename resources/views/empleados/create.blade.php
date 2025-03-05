@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Crear un empleado para "{{ $oficina->nombre }}"</h1>
    <form action="{{ route('oficinas.empleados.store', $oficina) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>
        <div class="mb-3">
            <label for="primer_apellido" class="form-label">Primer apellido: </label>
            <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" required>
        </div>
        <div class="mb-3">
            <label for="segundo_apellido" class="form-label">Segundo apellido: </label>
            <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido">
        </div>
        <div class="mb-3">
            <label for="rol" class="form-label">Rol: </label>
            <input type="text" class="form-control" name="rol" id="rol">
        </div>
        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento: </label>
            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI: </label>
            <input type="text" class="form-control" name="dni" id="dni" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email: </label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar el empleado</button>
    </form>
@endsection
