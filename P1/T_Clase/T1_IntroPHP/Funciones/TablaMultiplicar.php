<?php

// Realizar un programa que permita mostrar la tabla de multiplicar de un número ingresado por teclado, tomando en cuenta lo siguiente:
// a.El usuario deberá indicar hasta que número de la tabla desea mostrar
// b.Los números ingresados únicamente deben ser enterosc.El sistema debe tener la capacidad de ejecutar el programa las veces que sean necesarias

function tablaMultiplicar($num, $numFinal)
{

    $resp = "";

    for ($i = 1; $i <= $numFinal; $i++) {
        $mul = $num * $i;
        $resp .= "$num * $i = $mul <br>";
    }

    return $resp;
}
