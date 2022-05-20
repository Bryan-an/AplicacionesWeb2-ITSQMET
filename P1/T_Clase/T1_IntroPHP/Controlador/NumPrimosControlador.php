<?php

if (isset($_GET['initNumber'])) {

    include '../Funciones/NumPrimos.php';

    $initNumber = $_GET['initNumber'];
    $resp = calculatePrimeNumbers($initNumber);
    echo $resp;
}
