<?php

if (isset($_GET['frase'])) {

    include '../Funciones/Vocales.php';

    $frase = $_GET['frase'];
    echo "" . cantVocales($frase);
}
