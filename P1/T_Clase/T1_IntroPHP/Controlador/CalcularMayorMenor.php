<!-- 7.Solicitar al usuario ingresar dos números: mostrar y controlar lo siguiente:
a.Controlar que sean dos números distintos
b.Mostrar cual de los dos es mayorc.Mostrar al menor -->

<?php

if (isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3'])) {
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];
    $resp = calcularMayorMenor($n1, $n2, $n3);
    echo $resp;
}

function calcularMayorMenor($n1, $n2, $n3)
{
    if ($n1 != $n2 && $n1 != $n3 && $n2 != $n3) {
        $numbers = array($n1, $n2, $n3);
        sort($numbers);

        return "<h2>El número mayor es $numbers[2] y el menor es $numbers[0]</h2>";
    } else {
        return "<h2>Los número deben ser distintos</h2>";
    }
}
