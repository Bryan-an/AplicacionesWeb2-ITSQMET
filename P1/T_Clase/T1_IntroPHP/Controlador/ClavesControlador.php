<?php

if (isset($_GET['claveO']) && isset($_GET['claveC'])) {

    include '../Funciones/Claves.php';

    $claveO = $_GET['claveO'];
    $claveC = $_GET['claveC'];

    echo "" . confirmarClaves($claveO, $claveC);

}
