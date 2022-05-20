<?php

if (isset($_GET['posF'])) {
    include '../Funciones/fibonacci.php';

    $pf = $_GET['posF'];
    $resp = fibonacci($pf);
    echo $resp;
}
