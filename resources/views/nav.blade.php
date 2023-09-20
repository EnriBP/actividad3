<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="/formAddBook">Añadir libros</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/showBooks">Mostrar libros</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/showFormAddPrestamo">Hacer préstamos</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/showPrestamos">Mostrar préstamos</a>
        </li>
        @auth
            {{-- Mostar enlances usarios logeados --}}
            <li class="nav-item active">
                <x-nav-link class="nav-link" href="{{ route('dashboard')}}" :active="request()->routeIs('dashboard')">
                    {{__('Dashborad')}}
                </x-nav>
            </li>
        @else
            {{-- Para los no logeados --}}
            <li class="nav-item active">
                <x-nav-link href="{{ route('login')}}" :active="request()->routeIs('login')">
                    {{__('Log in')}}
                </x-nav-link>
            </li>
            <li class="nav-item active">
                <x-nav-link href="{{ route('register')}}" :active="request()->routeIs('register')">
                    {{__('Register')}}
                </x-nav-link>
            </li>
        @endauth
    </ul>
</nav>