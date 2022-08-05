<?php

$userBD = "root";
$passwordBD = "";
$urlBD = "localhost";
$bdd = "app_web_2_p1_cine";

$cnx = mysqli_connect($urlBD, $userBD, $passwordBD);

if ($cnx) {
    $r = mysqli_select_db($cnx, $bdd);

    // if ($r) {
    //     echo "Conexión exitosa";
    // }

}
