<?php

if (isset($_GET['crud'])) {
    include "../modelo/CustomersModel.php";

    $crud = $_GET['crud'];

    if ($crud == 'read' && isset($_GET['buscar'])) {
        $b = $_GET['buscar'];
        $r = readCustomers($b);
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

        $r = createCustomers($n, $ln, $ic, $e, $dob, $ca, $ua);
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

        $r = updateCustomers($id, $n, $ln, $ic, $e, $dob, $ua);
        echo $r;
    } else if ($crud == 'delete'
        && isset($_GET['id'])) {
        $id = $_GET['id'];

        $r = deleteCustomers($id);
        echo $r;
    }

}
