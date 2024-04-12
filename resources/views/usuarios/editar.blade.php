<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
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
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
            font-size: 1rem;
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
    <h2 class="title">Editar Usuario</h2>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usuario->nombre }}" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="ap_pat" name="ap_pat" value="{{ $usuario->ap_pat }}" placeholder="Apellido Paterno" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="ap_mat" name="ap_mat" value="{{ $usuario->ap_mat }}" placeholder="Apellido Materno" required>
        </div>
        <div class="form-group">
            <input type="number" class="form-control" id="edad" name="edad" value="{{ $usuario->edad }}" placeholder="Edad" required>
        </div>
        <div class="form-group">
            <select class="form-control" id="genero" name="genero" required>
                <option value="M" {{ $usuario->genero == 'M' ? 'selected' : '' }}>Masculino</option>
                <option value="F" {{ $usuario->genero == 'F' ? 'selected' : '' }}>Femenino</option>
                <option value="O" {{ $usuario->genero == 'O' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email }}" placeholder="Correo electrónico" required>
        </div>
        <div class="form-group">
            <h9>" La contraseña ha sido enciptada para mayor seguridad "</h9>
            <input type="password" class="form-control" id="password" name="password" value="{{ $usuario->password }}" placeholder="Contraseña" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
        <button onclick="window.location.href = '{{ route('index') }}'" class="btn btn-regresar">Regresar</button>
    </form>
</div>

</body>
</html>
