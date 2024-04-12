<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Agrasync</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .title {
            color: #007bff;
            font-size: 2rem;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            border-bottom: 1px solid #007bff;
            border-radius: 0;
            box-shadow: none;
            color: #555;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }

        .form-control::placeholder {
            color: #999;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-primary:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        .btn-regresar {
            background-color: #dc3545;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-regresar:hover {
            background-color: #c82333;
        }

        .btn-regresar:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(220, 53, 69, 0.5);
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="title">Registrate</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="ap_pat" name="ap_pat" placeholder="Apellido Paterno" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="ap_mat" name="ap_mat" placeholder="Apellido Materno" required>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" required>
        </div>
        <div class="form-group">
            <select class="form-control" id="genero" name="genero" required>
                <option value="">-- Elige una Opción --</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
                <option value="O">Otro</option>
            </select>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
    <br>
    <button onclick="window.location.href = '{{ route('home') }}'" class="btn btn-regresar">Regresar</button>
</div>

</body>
</html>
