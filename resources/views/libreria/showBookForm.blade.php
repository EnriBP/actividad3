@extends('app')

@section('title', 'Updating book')

@section('content')

    <form action="{{route('updateBook')}}" method="POST">
        @csrf
        <label for="">Título:</label>
        <input type="text" name="titulo" value="{{ $libro->titulo }}">
        <label for="">Autor:</label>
        <input type="text" name="autor" value="{{ $libro->autor }}">
        <label for="">Año de publicación:</label>
        <input type="number" name="año_publicacion" min="1900" max="2023" value="{{ $libro->año_publicacion }}">
        <label for="">Género:</label>
        <input type="text" name="genero" value="{{ $libro->genero }}">
        <label for="">Disponible:</label>
        <select name="disponible" required>
            <option name="disponible" value="{{ $libro->disponible = 'si' }}">Si</option>
            <option name="disponible" value="{{ $libro->disponible = 'no' }}">No</option>
        </select>
        <input type="submit" value="Cambie los datos">
    </form>
@endsection