<!-- Realizar un sistema que permita entregar información a un trabajador respecto a su salario a recibir cada semana considerando:
  a.Si trabaja 40 horas o menos a la semana recibirá: $5 la hora
  b.Si trabaja mas de 40 horas a la semana recibirá: $8 la hora -->

<?php

if (isset($_GET['ht'])) {
    $ht = $_GET['ht'];

    $ts = calcularHoras($ht);

    echo "<p>El salario a recibir es: </p><h1>$ts</h1>";
}

function calcularHoras($horasTotales)
{
    if ($horasTotales <= 40) {
        $totalSalario = $horasTotales * 5;
    } else {
        $totalSalario = $horasTotales * 8;
    }

    return $totalSalario;
}