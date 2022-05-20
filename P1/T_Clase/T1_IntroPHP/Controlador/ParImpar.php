<!-- Crear un programa en el cual se pida al usuario ingresar un numero con el fin de:
a.Determinar si ese numero es par o impar -->

<?php

if (isset($_GET['n'])) {
    $n = $_GET['n'];
    $resp = calcularParImpar($n);
    echo $resp;
} else if (isset($_GET['n1'])) {
    $n1 = $_GET['n1'];
    $resp = calcularPrimo($n1);
    echo $resp;
}

function calcularParImpar($n)
{
    if ($n % 2 == 0) {
        return "<label>El número $n es par</label>";
    } else {
        return "<label>El número $n es impar</label>";
    }
}

function calcularPrimo($n)
{
    $divisors = 1;

    for ($i = 2; $i <= $n; $i++) {
        if ($n % $i == 0) {
            if (++$divisors > 2) {
                return "<h2>El número $n no es primo</h2>";
            }
        }
    }

    return "<h2>El número $n es primo</h2>";
}