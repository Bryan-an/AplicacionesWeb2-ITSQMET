<?php

if (isset($_GET['palabra'])) {
    include '../Funciones/PalabraAscendente.php';

    $palabra = $_GET['palabra'];

    echo "" . palabraAsc($palabra);

}
