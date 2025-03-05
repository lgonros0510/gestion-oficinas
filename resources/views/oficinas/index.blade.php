@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Oficinas disponibles</h1>
    <a href="{{ route('oficinas.create') }}" class="btn btn-primary mb-3">Añadir una oficina</a>
    
    <div class="list-group">
        @foreach($oficinas as $oficina)
            <a href="{{ route('oficinas.show', $oficina) }}" class="list-group-item list-group-item-action">
                {{ $oficina->nombre }}
            </a>
        @endforeach
    </div>
@endsection
