<?php

if (isset($_GET['start']) && isset($_GET['end'])) {
    include "../Funciones/DeberHoras.php";

    $start = $_GET['start'];
    $end = $_GET['end'];

    echo "" . calculateHours($start, $end);
}
