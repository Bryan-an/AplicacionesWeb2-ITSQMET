<?php

if (isset($_GET['dateOfBirth'])) {
    include '../Funciones/18_Peliculas.php';

    $dateOfBirth = $_GET['dateOfBirth'];

    echo json_encode(array("movies" => determineMovies($dateOfBirth)));
}
