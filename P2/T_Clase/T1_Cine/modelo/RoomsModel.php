<?php

function readRooms($searchText)
{
    include "CBDD.php";

    $sql = "SELECT r.`id`, r.`name`, r.`capacity`, r.`feature`, r.`created_at`, r.`updated_at`, r.`movie_id`, m.`name`  FROM `rooms` AS r INNER JOIN `movies` AS `m` ON r.`movie_id` = m.`id` WHERE r.`name` LIKE '%$searchText%'";

    $result = mysqli_query($cnx, $sql);

    while ($obj = mysqli_fetch_array($result)) {

        $arr[] = array(
            'id' => $obj['id'],
            'name' => $obj[1],
            'capacity' => $obj['capacity'],
            'feature' => $obj['feature'],
            'created_at' => $obj['created_at'],
            'updated_at' => $obj['updated_at'],
            'movie_id' => $obj['movie_id'],
            'movie_name' => $obj['name'],
        );
    }

    return json_encode($arr);
}

function createRooms($name, $capacity, $feature, $created_at, $updated_at, $movie_id)
{
    include "CBDD.php";

    $sql = "INSERT INTO `rooms`(`name`, `capacity`, `feature`, `created_at`, `updated_at`, `movie_id`) VALUES ('$name', '$capacity','$feature','$created_at','$updated_at', '$movie_id')";

    return mysqli_query($cnx, $sql);
}

function updateRooms($id, $name, $capacity, $feature, $updated_at, $movie_id)
{
    include "CBDD.php";

    $sql = "UPDATE `rooms` SET `name`='$name',`capacity`=$capacity,`feature`='$feature',`updated_at`='$updated_at', `movie_id` = '$movie_id' WHERE `id` = $id";

    return mysqli_query($cnx, $sql);
}

function deleteRooms($id)
{
    include "CBDD.php";

    $sql = "DELETE FROM `rooms` WHERE `id` = $id";

    return mysqli_query($cnx, $sql);
}
