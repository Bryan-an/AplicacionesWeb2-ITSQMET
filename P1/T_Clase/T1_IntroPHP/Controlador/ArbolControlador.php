<?php

if (isset($_GET['num'])) {
    include '../Funciones/Arbol.php';

    $num = $_GET['num'];
    echo "" . arbol($num);
}
