<!-- Crear un programa que pida al usuario dos cadenas de texto, verificar e imprimir:
a.Validad si la longitud de las cadenas es igual, en ese caso imprimir: “Cadenas iguales”
b.Si son distintas imprimir: “Cadenas distintas” -->

<?php

if (isset($_GET['str1']) && isset($_GET['str2'])) {
    $str1 = $_GET['str1'];
    $str2 = $_GET['str2'];

    $resp = calcularLongitudCadenas($str1, $str2);
    echo $resp;
}

function calcularLongitudCadenas($str1, $str2)
{
    if (strlen($str1) == strlen($str2)) {
        return "<label>Las longitud de las cadenas son: </label><h2>iguales</h2>";
    } else {
        return "<label>Las longitud de las cadenas son: </label><h2>distintas</h2>";
    }
}