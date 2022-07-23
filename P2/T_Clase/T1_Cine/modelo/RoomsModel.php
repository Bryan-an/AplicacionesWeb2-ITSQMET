<?php

function readRooms($searchText)
{
    include "CBDD.php";

    $sql = "SELECT `id`, `name`, `capacity`, `feature`, `created_at`, `updated_at`  FROM `rooms` WHERE `name` LIKE '%$searchText%'";

    $result = mysqli_query($cnx, $sql);

    while ($obj = mysqli_fetch_array($result)) {

        $arr[] = array(
            'id' => $obj['id'],
            'name' => $obj['name'],
            'capacity' => $obj['capacity'],
            'feature' => $obj['feature'],
            'created_at' => $obj['created_at'],
            'updated_at' => $obj['updated_at'],
        );
    }

    return json_encode($arr);
}

function createRooms($name, $capacity, $feature, $created_at, $updated_at)
{
    include "CBDD.php";

    $sql = "INSERT INTO `rooms`(`name`, `capacity`, `feature`, `created_at`, `updated_at`) VALUES ('$name', '$capacity','$feature','$created_at','$updated_at')";

    return mysqli_query($cnx, $sql);
}

function updateRooms($id, $name, $capacity, $feature, $updated_at)
{
    include "CBDD.php";

    $sql = "UPDATE `rooms` SET `name`='$name',`capacity`=$capacity,`feature`='$feature',`updated_at`='$updated_at' WHERE `id` = $id";

    return mysqli_query($cnx, $sql);
}

function deleteRooms($id)
{
    include "CBDD.php";

    $sql = "DELETE FROM `rooms` WHERE `id` = $id";

    return mysqli_query($cnx, $sql);
}
