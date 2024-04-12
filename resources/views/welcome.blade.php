<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrasync - Bienvenido</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para hacer la imagen un poco más grande */
        img {
            width: 100%; /* Cambiar al porcentaje deseado */
            max-width: 800px; /* Establecer un ancho máximo para evitar que la imagen se estire demasiado en pantallas grandes */
            height: auto; /* Mantener la proporción de aspecto de la imagen */
            display: block; /* Evitar que la imagen tenga espacios adicionales debajo */
            margin: auto; /* Centrar la imagen horizontalmente */
            border-radius: 10px; /* Agregar bordes redondeados a la imagen */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Agregar sombra suave a la imagen */
        }
        /* Estilos para el contenedor principal */
        .container {
            padding: 40px;
            border-radius: 10px;
            background-color: #f8f9fa; /* Cambiar el color de fondo del contenedor */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Agregar sombra suave al contenedor */
            margin-top: 50px;
        }
        /* Estilos para el encabezado */
        h1 {
            color: #007bff; /* Cambiar el color del texto del encabezado */
            font-weight: bold;
            margin-bottom: 20px;
        }
        /* Estilos para el párrafo */
        p {
            font-size: 18px;
            line-height: 1.6;
            color: #333; /* Cambiar el color del texto del párrafo */
            margin-bottom: 30px;
        }
        /* Estilos para la barra de navegación */
        .navbar {
            background-color: #fff; /* Cambiar el color de fondo de la barra de navegación */
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Agregar sombra suave a la barra de navegación */
        }
        .navbar-brand {
            color: #007bff; /* Cambiar el color del texto del enlace de la marca */
            font-weight: bold;
        }
        .nav-link {
            color: #555; /* Cambiar el color del texto de los enlaces de navegación */
            font-weight: bold;
        }
        .nav-link:hover {
            color: #007bff; /* Cambiar el color del texto de los enlaces de navegación al pasar el mouse */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand">Agrasync</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <h1>Bienvenido a Agrasync</h1>
    <p>Aquí puedes encontrar todas tus necesidades agrícolas.</p>
    <img src="https://www.shutterstock.com/image-photo/panorama-view-countryside-landscape-maize-260nw-2018983463.jpg" alt="Descripción de la imagen">
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
