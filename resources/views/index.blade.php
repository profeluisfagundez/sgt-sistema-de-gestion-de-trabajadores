<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGT - Sistema de Gestión de Trabajadores</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"> <!-- Enlace al archivo CSS -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/home') }}">Inicio</a></li>
                <li><a href="{{ url('/contact') }}">Contacto</a></li>
                <li><a href="{{ url('/workers') }}">Trabajadores</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>SGT - Sistema de Gestión de Trabajadores</h1>
        <p>Bienvenido al sistema de gestión de trabajadores. Utilice el menú para navegar a las diferentes secciones.</p>
    </main>
</body>
</html>
