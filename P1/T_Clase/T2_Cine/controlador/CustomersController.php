<?php

if (isset($_GET['buscar'])) {
    include "../modelo/CustomersModel.php";

    $b = $_GET['buscar'];
    $r = readCustomers($b);
    echo $r;
}
