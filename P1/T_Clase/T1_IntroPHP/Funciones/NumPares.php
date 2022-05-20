<?php

// Realizar un programa que permita imprimir los primeros 10 números pares a partir del número ingresado por el usuario

function numPares($numInicial)
{

    $resp = "";

    for ($i = $numInicial; $i < $numInicial + 20; $i++) {
        if ($i % 2 == 0) {
            $resp .= "[$i]<br>";
        }
    }

    return $resp;
}
