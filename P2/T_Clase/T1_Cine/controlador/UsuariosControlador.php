<?php

if (isset($_GET['crud'])) {
    $crud = $_GET['crud'];

    include '../modelo/UsuarioModelo.php';

    if ($crud == "read" && isset($_GET['buscar'])) {
        $b = $_GET['buscar'];
        $r = readUsuarios($b);
        echo $r;
    } else if ($crud == "delete" && isset($_GET['id'])) {
        $id = $_GET['id'];
        $r = deleteUsuarios($id);
        echo $r;
    } else if ($crud == "create" && isset($_GET['txtUser']) && isset($_GET['txtPassword']) && isset($_GET['txtRole'])) {
        $txtUser = $_GET['txtUser'];
        $txtPassword = $_GET['txtPassword'];
        $txtRole = $_GET['txtRole'];
        $r = insertUsuarios($txtUser, $txtPassword, $txtRole);
        echo $r;
    } else if ($crud == "update" && isset($_GET['id']) && isset($_GET['txtUser']) && isset($_GET['txtRole'])) {
        $id = $_GET['id'];
        $txtUser = $_GET['txtUser'];
        $txtPassword = "";

        if (isset($_GET['txtPassword'])) {
            $txtPassword = $_GET['txtPassword'];
        } else {
            $txtPassword = null;
        }

        $txtRole = $_GET['txtRole'];
        $r = updateUsuarios($id, $txtUser, $txtPassword, $txtRole);
        echo $r;
    }
}
