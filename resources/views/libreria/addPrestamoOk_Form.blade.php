@extends('app')

@section('title', "Formulario prestar libro")

@section('content')
    @if ($id > 0)
        <p>Se ha añadido correctamente.</p>
    @else
        <p>Ha ocurrido un error al insertar.</p>
    @endif
@endsection