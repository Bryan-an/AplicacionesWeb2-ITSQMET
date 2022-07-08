<?php

function readSchedules($searchText)
{
    include "CBDD.php";

    $sql = "SELECT * FROM `schedules` WHERE `start` LIKE '%$searchText%' OR `end` LIKE '%$searchText%'";

    $result = mysqli_query($cnx, $sql);

    while ($obj = mysqli_fetch_array($result)) {
        $arr[] = array(
            'id' => $obj['id'],
            'start' => $obj['start'],
            'end' => $obj['end'],
            'created_at' => $obj['created_at'],
            'updated_at' => $obj['updated_at'],
        );
    }

    return json_encode($arr);
}

function createSchedules($start, $end, $created_at, $updated_at)
{
    include "CBDD.php";

    $sql = "INSERT INTO `schedules`(`start`, `end`, `created_at`, `updated_at`) VALUES ('$start','$end','$created_at','$updated_at')";

    return mysqli_query($cnx, $sql);
}

function updateSchedules($id, $start, $end, $updated_at)
{
    include "CBDD.php";

    $sql = "UPDATE `schedules` SET `start`='$start',`end`='$end',`updated_at`='$updated_at' WHERE `id` = $id";

    return mysqli_query($cnx, $sql);
}

function deleteSchedules($id)
{
    include "CBDD.php";

    $sql = "DELETE FROM `schedules` WHERE `id` = $id";

    return mysqli_query($cnx, $sql);
}
