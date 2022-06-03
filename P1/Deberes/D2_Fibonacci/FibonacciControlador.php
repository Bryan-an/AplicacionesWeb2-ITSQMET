<?php

if (isset($_GET['posF'])) {
    include './fibonacci.php';

    $pf = $_GET['posF'];
    $resp = fibonacci($pf);
    echo $resp;
}
