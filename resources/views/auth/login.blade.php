<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Agrasync</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .title {
            color: #007bff;
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .label {
            font-size: 1.1rem;
            color: #333;
        }

        .input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 5px;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        .text {
            font-size: 1rem;
            text-align: center;
        }

        .link {
            color: #007bff;
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="title">Iniciar Sesión</h2>
    @if(session('error'))
        <div class="alert" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email" class="label">Correo electrónico:</label>
            <input type="email" class="input" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password" class="label">Contraseña:</label>
            <input type="password" class="input" id="password" name="password" required>
        </div>
        <button type="submit" class="btn">Iniciar Sesión</button>
        <br>
        <br>
    </form>
    <button onclick="window.location.href = '{{ route('home') }}'" class="btn">Regresar</button>
    <br>
    <br>
    <p class="text">¿Aún no tienes una cuenta? <a href="{{ route('register') }}" class="link">Regístrate aquí</a>.</p>
</div>

</body>
</html>
