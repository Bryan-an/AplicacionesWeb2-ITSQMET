<?php

if (isset($_POST['txtUser']) && isset($_POST['txtPassword'])) {
    include '../modelo/UsuarioModelo.php';

    $user = $_POST['txtUser'];
    $clave = $_POST['txtPassword'];

    $r = verificarUsuario($user, $clave);

    if ($r == "1") {
        header("Location: ../vista/Menu.php");
    } else {
        header('Location: ../vista/Login.php');
    }
}
