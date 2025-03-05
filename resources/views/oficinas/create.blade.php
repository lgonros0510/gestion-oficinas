@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Crear una oficina</h1>
    <form action="{{ route('oficinas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección: </label>
            <input type="text" class="form-control" name="direccion" id="direccion">
        </div>
        <button type="submit" class="btn btn-primary">Guardar la oficina</button>
    </form>
@endsection
