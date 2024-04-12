<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
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
    <h2 class="mb-4">Datos de Temperatura y Humedad</h2>
    <div class="row">
        <div class="col-md-6">
            <canvas id="graficoDatos" width="400" height="200"></canvas>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Temperatura (°C)</th>
                        <th>Humedad (%)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datos as $dato)
                        <tr>
                            <td>{{ $dato->id }}</td>
                            <td>{{ $dato->temperatura }}</td>
                            <td>{{ $dato->humedad }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    // Obtener el contexto del lienzo
    var ctx = document.getElementById('graficoDatos').getContext('2d');

    // Generar datos para la gráfica
    var labels = @json($datos->pluck('id'));
    var temperaturas = @json($datos->pluck('temperatura'));
    var humedades = @json($datos->pluck('humedad'));

    // Configurar la gráfica de barras
    var graficoDatos = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Temperatura (°C)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                data: temperaturas
            }, {
                label: 'Humedad (%)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                data: humedades
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>
</html>
