@extends('app')

@section('title', 'Mostrar Prestamos')

@section('content')

    @if($prestamos->isEmpty())
        <p>No hay prestamos</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Id libro</th>
                    <th>Id usuario</th>
                    <th>Fecha préstamo</th>
                    <th>Fecha devolución</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @each('components.table_prestamos', $prestamos, 'prestamo')
            </tbody>
        </table>
    @endif
@endsection