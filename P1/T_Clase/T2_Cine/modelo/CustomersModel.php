<?php

function readCustomers($buscar)
{
    include "CBDD.php";

    $sql = "SELECT * FROM `customers` WHERE `name` like '%$buscar%' or `last_name` like '%$buscar%' or `id_card` like '%$buscar%'";
    $result = mysqli_query($cnx, $sql);
    $resp = "";

    while ($obj = mysqli_fetch_array($result)) {
        $resp .= $obj['id'] . "<br>";
        $resp .= $obj['name'] . "<br>";
        $resp .= $obj['last_name'] . "<br>";
        $resp .= $obj['id_card'] . "<br>";
        $resp .= $obj['email'] . "<br>";
        $resp .= $obj['date_of_birth'] . "<br>";
        $resp .= $obj['created_at'] . "<br>";
        $resp .= $obj['updated_at'] . "<br>";
    }

    return $resp;
}

function createCustomers()
{
    include "CBDD.php";

    $sql = "";
    $resp = mysqli_query($cnx, $sql);

    return $resp;
}

function updateCustomers()
{
    include "CBDD.php";

    $sql = "";
    $resp = mysqli_query($cnx, $sql);

    return $resp;
}

function deleteCustomers()
{
    include "CBDD.php";

    $sql = "";
    $resp = mysqli_query($cnx, $sql);

    return $resp;
}
