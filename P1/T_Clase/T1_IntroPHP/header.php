<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicios</title>
  <!-- Latest compiled and minified CSS -->
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="data:image/png;base64,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" width="30" height="30" alt="">
  </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="vista-promedios.php">Ejercicio 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FormularioGafas.php">Ejercicio 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FormularioCalcularHoras.php">Ejercicio 3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FormularioMayorMenor.php">Ejercicio 4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FormularioNumeroPrimoParImpar.php">Ejercicio 5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FormularioCadenasLongitud.php">Ejercicio 6</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FormularioVotacion.php">Ejercicio 7</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FormularioVocales.php">Ejercicio 8</a>
      </li>
    </ul>
  </div>
</nav>
