<?php

function log_in($username, $password)
{
    include 'db_connection.php';

    $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = SHA1('$password')";

    return mysqli_query($connection, $sql);
}
