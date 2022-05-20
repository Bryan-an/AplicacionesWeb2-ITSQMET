<?php

// Construir un programa que solicite al usuario un número entero positivo y que imprima hacia abajo y acumulando por pasada un asterisco, de manera que el resultado se vería así**************

function arbol($num)
{
    $arbol = "";

    for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            $arbol .= "*";
        }
        $arbol .= "<br>";
    }

    return $arbol;
}
