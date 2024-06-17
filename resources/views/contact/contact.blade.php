<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Enlace al CSS -->
</head>
<body>
    <div class="container">
        <h1>Contacto</h1>
        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('contact.submit') }}">
            @csrf
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
