<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Agrasync</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-container {
            margin: 20px auto;
            text-align: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}">Agrasync</a>
    <a class="nav-link" href="{{ route('venta') }}">Ventas</a>
    <a class="nav-link" href="{{ route('datos') }}">Datos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Acerca de
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('usuarios.editar', auth()->user()->id) }}">Editar Usuario</a>
            <a class="dropdown-item" href="{{ route('usuarios.eliminar', auth()->user()->id) }}">Eliminar Usuario</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h2 class="mb-4">Dashboard</h2>
    <div class="image-container">
        <img src="https://images.pexels.com/photos/461960/pexels-photo-461960.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1.jpg" alt="Agricultura" style="width: 50%;">
    </div>
    <p>Nuestra plataforma te ayuda a monitorear y controlar la temperatura y condiciones ambientales ideales para la agricultura, garantizando un entorno óptimo para el crecimiento de tus cultivos.</p>
</div>


<!-- Bootstrap JS y dependencias -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
