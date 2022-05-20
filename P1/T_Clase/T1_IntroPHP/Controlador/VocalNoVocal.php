<!-- Crear un programa que solicite al usuario ingresar una letra, imprimir:
a.Si ingresó una vocal: “Es un vocal”
b.Si ingresó una letra distinta a una vocal: “No es una vocal” -->

<?php

if (isset($_GET['letra'])) {
    $letra = $_GET['letra'];
    $resp = compararVocal($letra);
    echo $resp;
}

function compararVocal($letra)
{
    $vocales = array("a", "e", "i", "o", "u");

    if (in_array($letra, $vocales)) {
        return "<h1>Es vocal</h1>";
    } else {
        return "<h1>No es vocal</h1>";
    }
}