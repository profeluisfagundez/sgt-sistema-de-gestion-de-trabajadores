<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajadores</title>
    <link rel="stylesheet" href="{{ asset('css/workers.css') }}">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/home') }}">Inicio</a></li>
                <li><a href="{{ url('/contact') }}">Contacto</a></li>
                <li><a href="{{ route('workers.create') }}">Cargar Trabajador</a></li>
                <li><a href="{{ url('/workers') }}">Listar trabajadores</a></li>
                @auth
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Cerrar Sesión</button>
                    </form>
                </li>
                @endauth
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Lista de Trabajadores</h1>
        @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
        @endif
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Posición</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($workers as $worker)
                <tr>
                    <td>{{ $worker->name }}</td>
                    <td>{{ $worker->position }}</td>
                    <td>{{ $worker->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>