<?php

if (isset($_GET['nI'])) {
    include '../Funciones/NumPares.php';

    $ni = $_GET['nI'];
    $r = numPares($ni);
    echo $r;
}
