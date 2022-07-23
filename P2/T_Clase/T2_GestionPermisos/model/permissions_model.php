<?php

function raed_permissions($search_text)
{
    include "db_connection.php";

    // filtrar por las fechas y el tipo
    $sql = "SELECT * FROM `permissions` WHERE `start_date` LIKE '%$search_text%' OR `end_date` LIKE '%$search_text%' OR `type` LIKE '%$search_text%'";

    $result = mysqli_query($connection, $sql);

    $arr = array();

    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $arr[] = array(
                'id' => $row['id'],
                'start_date' => $row['start_date'],
                'end_date' => $row['end_date'],
                'type' => $row['type'],
                'observation' => $row['observation'],
                'state' => $row['state'],
                'created_at' => $row['created_at'],
                'updated_at' => $row['updated_at'],
            );
        }
    }

    return json_encode($arr);
}

function create_permission($start_date, $end_date, $type, $observation)
{
    include 'db_connection.php';

    $sql = "INSERT INTO `permissions` (`start_date`, `end_date`, `type`, `observation`, `state`, `created_at`, `updated_at`) VALUES ('$start_date', '$end_date', '$type', '$observation', 'pendiente', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";

    return mysqli_query($connection, $sql);
}

function update_permission($id, $start_date, $end_date, $type, $observation, $state)
{
    include 'db_connection.php';

    $sql = "UPDATE `permissions` SET `start_date`= '$start_date', `end_date`= '$end_date', `type`= '$type', `observation`= '$observation', `state`= '$state', `updated_at`= CURRENT_TIMESTAMP WHERE `id` = $id";

    return mysqli_query($connection, $sql);
}

function delete_permission($id)
{
    include "db_connection.php";

    $sql = "DELETE FROM `permissions` WHERE `id` = $id";

    return mysqli_query($connection, $sql);
}
