@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Editar el empleado "{{ $empleado->nombre }} {{ $empleado->primer_apellido }}"</h1>
    <form action="{{ route('oficinas.empleados.update', [$oficina, $empleado]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $empleado->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="primer_apellido" class="form-label">Primer apellido: </label>
            <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" value="{{ $empleado->primer_apellido }}" required>
        </div>
        <div class="mb-3">
            <label for="segundo_apellido" class="form-label">Segundo apellido: </label>
            <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" value="{{ $empleado->segundo_apellido }}">
        </div>
        <div class="mb-3">
            <label for="rol" class="form-label">Rol: </label>
            <input type="text" class="form-control" name="rol" id="rol" value="{{ $empleado->rol }}">
        </div>
        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento: </label>
            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $empleado->fecha_nacimiento }}">
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI: </label>
            <input type="text" class="form-control" name="dni" id="dni" value="{{ $empleado->dni }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email: </label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $empleado->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar el empleado</button>
    </form>
@endsection
