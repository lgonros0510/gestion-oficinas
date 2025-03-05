@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ $oficina->nombre }}</h1>
    <p>Dirección: {{ $oficina->direccion }}</p>
    
    <h2 class="mt-4 mb-3">Empleados en la oficina</h2>
    <a href="{{ route('oficinas.empleados.create', $oficina) }}" class="btn btn-primary mb-3">Añadir un empleado</a>
    
    @if($oficina->empleados->count() > 0)
        <div class="list-group">
            @foreach($oficina->empleados as $empleado)
                <a href="{{ route('oficinas.empleados.edit', [$oficina, $empleado]) }}" class="list-group-item list-group-item-action">
                    {{ $empleado->nombre }} {{ $empleado->primer_apellido }} - {{ $empleado->dni }}
                </a>
            @endforeach
        </div>
    @else
        <p>No hay empleados registrados en esta oficina.</p>
    @endif
@endsection
