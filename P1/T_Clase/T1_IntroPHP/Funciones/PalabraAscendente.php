<?php

// Construir un programa que pida al usuario ingresar una palabra por teclado, mostrar cada letra separadas por un salto de línea desde la ultima letra hasta la primera de la palabra

function palabraAsc($palabra)
{
    $palabraArr = str_split($palabra);
    $r = "";

    for ($i = sizeof($palabraArr) - 1; $i >= 0; $i--) {
        $r .= $palabraArr[$i] . "<br>";
    }

    return $r;
}
