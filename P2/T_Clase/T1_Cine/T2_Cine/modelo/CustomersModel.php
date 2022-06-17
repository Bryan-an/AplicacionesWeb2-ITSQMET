<?php

function readCustomers($buscar)
{
    include "CBDD.php";

    $sql = "SELECT * FROM `customers` WHERE `name` like '%$buscar%' or `last_name` like '%$buscar%' or `id_card` like '%$buscar%'";
    $result = mysqli_query($cnx, $sql);

    while ($obj = mysqli_fetch_array($result)) {
        $arr[] = array(
            'id' => $obj['id'],
            'name' => $obj['name'],
            'last_name' => $obj['last_name'],
            'id_card' => $obj['id_card'],
            'email' => $obj['email'],
            'date_of_birth' => $obj['date_of_birth'],
            'created_at' => $obj['created_at'],
            'updated_at' => $obj['updated_at'],
        );
    }

    return json_encode($arr);
}

function createCustomers($n, $ln, $ic, $e, $dob, $ca, $ua)
{
    include "CBDD.php";

    $sql = "INSERT INTO `customers` (`name`, `last_name`, `id_card`, `email`, `date_of_birth`, `created_at`, `updated_at`) VALUES ('$n','$ln','$ic','$e','$dob','$ca','$ua')";

    $resp = mysqli_query($cnx, $sql);

    return $resp;
}

function updateCustomers($id, $n, $ln, $ic, $e, $dob, $ua)
{
    include "CBDD.php";

    $sql = "UPDATE `customers` SET `name`='$n',`last_name`='$ln',`id_card`='$ic',`email`='$e',`date_of_birth`='$dob',`updated_at`='$ua' WHERE `id`=$id";

    $resp = mysqli_query($cnx, $sql);

    return $resp;
}

function deleteCustomers($id)
{
    include "CBDD.php";

    $sql = "DELETE FROM `customers` WHERE `id`=$id";

    $resp = mysqli_query($cnx, $sql);

    return $resp;
}
