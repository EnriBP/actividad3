<tr>
    @if ($users->rol == 'admin')
        <td>{{ $prestamo->libro_id }}</td>
        <td>{{ $prestamo->user_id }}</td>
        <td>{{ $prestamo->fecha_prestamo }}</td>
        <td>{{ $prestamo->fecha_devolucion }}</td>
        <td>
            <a href="http://127.0.0.1:8000/updatePrestamoForm/{{ $prestamo->id }}"><button>Cambiar Préstamo</button></a>
            @if ($prestamo->fecha_devolucion=='null')
                <a href="http://127.0.0.1:8000/updateDevolucionForm/{{ $prestamo->id }}"><button>Devolver</button></a>
            @endif
        </td>
    @endif

    @if ($users->rol == 'usuario')
        @if ($users->email == $prestamo->user_id)
            <td>{{ $prestamo->libro_id }}</td>
            <td>{{ $prestamo->user_id }}</td>
            <td>{{ $prestamo->fecha_prestamo }}</td>
            <td>{{ $prestamo->fecha_devolucion }}</td>
            <td>
                <a href="http://127.0.0.1:8000/updatePrestamoForm/{{ $prestamo->id }}"><button>Cambiar Préstamo</button></a>
                @if ($prestamo->fecha_devolucion=='null')
                    <a href="http://127.0.0.1:8000/updateDevolucionForm/{{ $prestamo->id }}"><button>Devolver</button></a>
                @endif
            </td>
        @endif
    @endif
</tr>