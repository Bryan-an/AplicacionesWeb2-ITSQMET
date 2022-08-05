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
    $roleName = "";

    while ($obj = mysqli_fetch_array($result)) {
        $cont++;
        $user = $obj['user'];
        $roleId = $obj['role_id'];
        $sql2 = "SELECT * FROM `roles` WHERE `id` = '$roleId'";
        $res = mysqli_query($cnx, $sql2);

        if ($res) {
            while ($obj = mysqli_fetch_array($res)) {
                $roleName = $obj['name'];
            }
        }
    }

    if ($cont > 0) {
        $r = "1";
        session_start();
        $_SESSION['usuario'] = $user;
        $_SESSION['role'] = $role;
        $_SESSION['estado'] = "1";
        $_SESSION['roleName'] = $roleName;

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

    $sql = "INSERT INTO `users` (`user`, `password`, `role_id`) VALUES ('$user', SHA1('$password'), '$role')";
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
