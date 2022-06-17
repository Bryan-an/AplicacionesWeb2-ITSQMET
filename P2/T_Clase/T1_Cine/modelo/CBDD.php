<?php

$user = "root";
$clave = "";
$url = "localhost";
$bdd = "app_web_2_p1_cine";

$cnx = mysqli_connect($url, $user, $clave);

if ($cnx) {
    $r = mysqli_select_db($cnx, $bdd);

    // if ($r) {
    //     echo "Conexión exitosa";
    // }

}
