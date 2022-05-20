<?php

$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];

$promedio = ($nota1 + $nota2 + $nota3) / 3;

if ($promedio >= 7) {
    echo "<h2>Aprobado!</h2>";
} else if ($promedio < 7) {
    echo "<h2>Reprobado!</h2>";
}
