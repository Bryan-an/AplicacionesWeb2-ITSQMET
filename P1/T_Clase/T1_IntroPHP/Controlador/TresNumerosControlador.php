<?php

if (isset($_GET['n1']) && isset($_GET['n2']) && isset($_GET['n3'])) {

    include '../Funciones/TresNumeros.php';

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];

    echo "" . promedioTresNumeros($n1, $n2, $n3);

}
