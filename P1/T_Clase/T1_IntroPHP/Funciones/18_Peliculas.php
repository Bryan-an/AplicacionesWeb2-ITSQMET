<?php
// Realizar un programa que pida al usuario sus datos personales incluido su fecha de nacimiento.
// A partir de la fecha, determinar si el usuario es apto para ver películas en una sala de cine.
// Este listado de películas estará listadado en eun <select> que el mismo usuario eligirá.
// Cada película tendrá una de las siguientes categorizaciones: +8, +16 y +18 años.

function determineMovies($dateOfBirth)
{
    $movies8 = array("Frozen", "Cars", "Zootopia");
    $movies16 = array("Avengers", "Iron-man", "Spider-man");
    $movies18 = array("Matrix", "Rápidos y Furiosos", "Duro de matar");

    $today = date("Y-m-d");
    $age = date_diff(date_create($dateOfBirth), date_create($today))->format('%y');

    if ($age > 18) {
        return $movies18;
    } elseif ($age > 16) {
        return $movies16;
    } elseif ($age > 8) {
        return $movies8;
    } else {
        return array();
    }
}
