<?php

// Crear un programa que permita mostrar la serie FIBONACCI teniendo en cuenta las siguientes consideraciones.
// a.El usuario deberá indicar hasta que posición de la serie desea imprimir
// b.Realizar ese ejercicio con while y con for.

function fibonacci($posFinal)
{
    // 0 1 1 2 3 5 8 13 21 34 55 89 ...
    $resp = "";
    $num0 = 0;
    $num1 = 1;

    for ($i = 1; $i < $posFinal; $i++) {
        $sum = $num0 + $num1;

        if ($i == 1) {
            $resp .= "[$num0][$num1][$sum]";
        } else {
            $resp .= "[$sum]";
        }

        $num0 = $num1;
        $num1 = $sum;
    }

    return $resp;
}
