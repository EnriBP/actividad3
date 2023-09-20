@extends('app')

@section('title', "Formulario devolución libro")

@section('content')
    <form action="{{ route('addDevolucion') }}" method="POST">
        @csrf
        <label for="fecha_devolucion">Fecha devolución</label>
        <input type="date" id="fecha_prestamo" name="fecha_prestamo" required>
        <input type="submit" value="Enviar">
    </form>
@endsection