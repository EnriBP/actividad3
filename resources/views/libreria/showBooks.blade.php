@extends('app')

@section('title', 'Mostrar Libros')

@section('content')
    @if($libros->isEmpty())
        <p>No hay libros</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año de publicacion</th>
                    <th>Género</th>
                    <th>Disponible</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @each('components.table_books', $libros, 'libro')
            </tbody>
        </table>
    @endif
@endsection