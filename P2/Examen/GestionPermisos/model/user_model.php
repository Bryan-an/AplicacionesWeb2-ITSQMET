<?php

function log_in($username, $password)
{
    include 'db_connection.php';

    $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = SHA1('$password')";

    return mysqli_query($connection, $sql);
}

function read_users($search_text)
{
    include "db_connection.php";

    // filtrar por las fechas y el tipo
    $sql = "SELECT `u`.`id`, `u`.`username`, `u`.`role`, `e`.`id_card` FROM `users` AS `u` INNER JOIN `employees` AS `e` ON `u`.`employee_id` = `e`.`id` WHERE `u`.`username` LIKE '%$search_text%' OR `u`.`role` LIKE '%$search_text%' OR `e`.`id_card` LIKE '%$search_text%'";

    $result = mysqli_query($connection, $sql);

    $arr = array();

    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $arr[] = array(
                'id' => $row[0],
                'username' => $row[1],
                'role' => $row[2],
                'employee_id_card' => $row[3],
            );
        }
    }

    return json_encode($arr);
}
