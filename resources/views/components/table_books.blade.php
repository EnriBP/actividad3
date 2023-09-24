<tr>
    @if ($users->rol == 'admin')
        <td>{{ $libro->titulo }}</td>
        <td>{{ $libro->autor }}</td>
        <td>{{ $libro->año_publicacion }}</td>
        <td>{{ $libro->genero }}</td>
        <td>{{ $libro->disponible }}</td>
        <td>
            <a href="http://127.0.0.1:8000/deleteBook/{{ $libro->id }}"><button>Borrar</button></a>
            <a href="http://127.0.0.1:8000/updateBookForm/{{ $libro->id }}"><button>Modificar</button></a>
            @if ($libro->disponible == 'si')
                <a href="http://127.0.0.1:8000/updatePrestamoForm/{{ $libro->id }}"><button>Hacer Préstamo</button></a>
            @endif
        </td> 
    @endif
    
    @if ($users->rol == 'usuario')
        @if ($users->email == $libro->user_id)
            <td>{{ $libro->titulo }}</td>
            <td>{{ $libro->autor }}</td>
            <td>{{ $libro->año_publicacion }}</td>
            <td>{{ $libro->genero }}</td>
            <td>{{ $libro->disponible }}</td>
            <td>
                <a href="http://127.0.0.1:8000/deleteBook/{{ $libro->id }}"><button>Borrar</button></a>
                <a href="http://127.0.0.1:8000/updateBookForm/{{ $libro->id }}"><button>Modificar</button></a>
                @if ($libro->disponible == 'si')
                    <a href="http://127.0.0.1:8000/updatePrestamoForm/{{ $libro->id }}"><button>Hacer Préstamo</button></a>
                @endif
            </td>
        @endif
    @endif
</tr>