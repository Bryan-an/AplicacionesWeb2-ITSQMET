<?php

function verificarUsuario($usuario, $clave)
{
    include "CBDD.php";

    $sql = "SELECT * FROM `users` WHERE `user` = '$usuario' AND `password` = SHA1('$clave')";
    $result = mysqli_query($cnx, $sql);
    $cont = 0;
    $r;
    $user = "";
    $role = "";

    while ($obj = mysqli_fetch_array($result)) {
        $cont++;
        $user = $obj['user'];
        $role = $obj['role'];
    }

    if ($cont > 0) {
        $r = "1";
        session_start();
        $_SESSION['usuario'] = $user;
        $_SESSION['role'] = $role;
        $_SESSION['estado'] = "1";
    } else {
        $r = "0";
    }

    return $r;
}

function readUsuarios($buscar)
{
    include "CBDD.php";

    $sql = "SELECT * FROM `users` WHERE `user` LIKE '%$buscar%' OR `role` LIKE '%$buscar%'";
    $result = mysqli_query($cnx, $sql);

    while ($obj = mysqli_fetch_array($result)) {
        $arr[] = array(
            "id" => $obj['id'],
            "user" => $obj['user'],
            "password" => $obj['password'],
            "role" => $obj['role'],
        );
    }

    return json_encode($arr);
}

function deleteUsuarios($id)
{
    include "CBDD.php";

    $sql = "DELETE FROM `users` WHERE `id` = $id";
    return mysqli_query($cnx, $sql);
}

function insertUsuarios($user, $password, $role)
{
    include "CBDD.php";

    $sql = "INSERT INTO `users` (`user`, `password`, `role`) VALUES ('$user', SHA1('$password'), '$role')";
    return mysqli_query($cnx, $sql);
}

function updateUsuarios($id, $user, $password, $role)
{
    include "CBDD.php";

    $sql = "";

    if ($password == null) {
        $sql = "UPDATE `users` SET `user` = '$user', `role` = '$role' WHERE `id` = $id";
    } else {
        $sql = "UPDATE `users` SET `user` = '$user', `password` = SHA1('$password'), `role` = '$role' WHERE `id` = $id";
    }

    return mysqli_query($cnx, $sql);
}
