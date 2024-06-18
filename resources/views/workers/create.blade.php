{{-- resources/views/workers/create.blade.php --}}

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Trabajador</title>
    <link rel="stylesheet" href="{{ asset('css/createworkers.css') }}">
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
        <h1>Crear Nuevo Trabajador</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('workers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="position">Posición:</label>
                <input type="text" id="position" name="position" class="form-control" value="{{ old('position') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Trabajador</button>
        </form>
    </div>
</body>

</html>
