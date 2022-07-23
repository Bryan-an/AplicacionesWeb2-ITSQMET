<?php

if (isset($_GET['crud'])) {
    include "../modelo/CustomersModel.php";

    $crud = $_GET['crud'];

    if ($crud == 'read' && isset($_GET['buscar'])) {
        $b = $_GET['buscar'];

        $sql = "SELECT * FROM `customers` WHERE `name` like '%$b%' or `last_name` like '%$b%' or `id_card` like '%$b%'";

        $r = readCustomers($sql);
        echo $r;
    } else if ($crud == 'create'
        && isset($_GET['n'])
        && isset($_GET['ln'])
        && isset($_GET['ic'])
        && isset($_GET['e'])
        && isset($_GET['dob'])
        && isset($_GET['ca'])
        && isset($_GET['ua'])) {

        $n = $_GET['n'];
        $ln = $_GET['ln'];
        $ic = $_GET['ic'];
        $e = $_GET['e'];
        $dob = $_GET['dob'];
        $ca = $_GET['ca'];
        $ua = $_GET['ua'];

        $sql = "INSERT INTO `customers` (`name`, `last_name`, `id_card`, `email`, `date_of_birth`, `created_at`, `updated_at`) VALUES ('$n','$ln','$ic','$e','$dob','$ca','$ua')";

        $r = executeQuery($sql);
        echo $r;
    } else if ($crud == 'update'
        && isset($_GET['id'])
        && isset($_GET['n'])
        && isset($_GET['ln'])
        && isset($_GET['ic'])
        && isset($_GET['e'])
        && isset($_GET['dob'])
        && isset($_GET['ua'])) {

        $id = $_GET['id'];
        $n = $_GET['n'];
        $ln = $_GET['ln'];
        $ic = $_GET['ic'];
        $e = $_GET['e'];
        $dob = $_GET['dob'];
        $ua = $_GET['ua'];

        $sql = "UPDATE `customers` SET `name`='$n',`last_name`='$ln',`id_card`='$ic',`email`='$e',`date_of_birth`='$dob',`updated_at`='$ua' WHERE `id`=$id";

        $r = executeQuery($sql);
        echo $r;
    } else if ($crud == 'delete'
        && isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM `customers` WHERE `id`=$id";

        $r = executeQuery($sql);
        echo $r;
    }

}
