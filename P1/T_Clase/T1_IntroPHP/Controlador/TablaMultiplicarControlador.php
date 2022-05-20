<?php

if (isset($_GET['num']) && isset($_GET['numf'])) {
    include '../Funciones/TablaMultiplicar.php';

    $n = $_GET['num'];
    $nf = $_GET['numf'];

    $resp = tablaMultiplicar($n, $nf);
    echo $resp;
}
