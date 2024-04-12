<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript para la alerta de confirmación -->
    <script>
        function confirmarEliminar() {
            if (confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Eliminar Usuario</h2>
    <p>¿Estás seguro de que deseas eliminar este usuario?</p>
    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $usuario->email }}</p>
    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" onsubmit="return confirmarEliminar()">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

</body>
</html>
