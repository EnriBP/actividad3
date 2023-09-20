@extends('app')

@section('title', "Formulario añadir libro")

@section('content')
    <form action="{{ route('addBook') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required>
        <label for="año_publicacion">Año de publicacion:</label>
        <input type="text" id="año_publicacion" name="año_publicacion" required>
        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" required>
        <label for="">Disponible:</label>
        <select name="disponible" id="" required>
            <option name="disponible" value="si">Si</option>
            <option name="disponible" value="no">No</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
@endsection