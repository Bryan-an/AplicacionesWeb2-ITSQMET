<?php

function raed_permissions($search_text)
{
    include "db_connection.php";

    // filtrar por las fechas y el tipo
    $sql = "SELECT `p`.`id`, `p`.`start_date`, `p`.`end_date`, `p`.`type`, `p`.`observation`, `p`.`state`, `e`.`id_card` FROM `permissions` AS `p` INNER JOIN `employees` AS `e` ON `p`.`employee_id` = `e`.`id` WHERE `p`.`start_date` LIKE '%$search_text%' OR `p`.`end_date` LIKE '%$search_text%' OR `p`.`type` LIKE '%$search_text%' OR `e`.`id_card` LIKE '%$search_text%'";

    $result = mysqli_query($connection, $sql);

    $arr = array();

    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $arr[] = array(
                'id' => $row[0],
                'start_date' => $row[1],
                'end_date' => $row[2],
                'type' => $row[3],
                'observation' => $row[4],
                'state' => $row[5],
                'employee_id_card' => $row[6],
            );
        }
    }

    return json_encode($arr);
}

function create_permission($start_date, $end_date, $type, $observation, $username)
{
    include 'db_connection.php';

    $sql1 = "SELECT `employee_id` FROM `users` WHERE `username` = '$username'";

    $result = mysqli_query($connection, $sql1);

    $employee_id = null;

    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $employee_id = $row['employee_id'];
        }
    }

    $sql2 = "INSERT INTO `permissions` (`start_date`, `end_date`, `type`, `observation`, `employee_id`) VALUES ('$start_date', '$end_date', '$type', '$observation', $employee_id);";

    return mysqli_query($connection, $sql2);
}

function update_permission($id, $start_date, $end_date, $type, $observation)
{
    include 'db_connection.php';

    $sql = "UPDATE `permissions` SET `start_date`= '$start_date', `end_date`= '$end_date', `type`= '$type', `observation`= '$observation', `updated_at` = CURRENT_TIMESTAMP WHERE `id` = $id";

    return mysqli_query($connection, $sql);
}

function update_permission_state($id, $state)
{
    include 'db_connection.php';

    $sql = "UPDATE `permissions` SET `state` = '$state' WHERE `id` = $id";

    return mysqli_query($connection, $sql);
}

function delete_permission($id)
{
    include "db_connection.php";

    $sql = "DELETE FROM `permissions` WHERE `id` = $id";

    return mysqli_query($connection, $sql);
}
