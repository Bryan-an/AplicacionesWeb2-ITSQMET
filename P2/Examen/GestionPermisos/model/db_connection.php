<?php

$user_db = "root";
$password_db = "";
$host_db = "localhost";
$db = "app_web_2_p2_examen";

$connection = mysqli_connect($host_db, $user_db, $password_db);

if ($connection) {
    $r = mysqli_select_db($connection, $db);

    // if ($r) {
    //     echo "Conexión exitosa";
    // } else {
    //     echo "Error al establecer la conexión";
    // }
}
