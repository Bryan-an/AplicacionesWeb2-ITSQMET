<?php

function readMovies($searchText)
{
    include "CBDD.php";

    $sql = "SELECT * FROM `movies` WHERE `name` LIKE '%$searchText%' OR `category` LIKE '%$searchText%' OR `type` LIKE '%$searchText%'";

    $result = mysqli_query($cnx, $sql);

    while ($obj = mysqli_fetch_array($result)) {
        $arr[] = array(
            'id' => $obj['id'],
            'name' => $obj['name'],
            'category' => $obj['category'],
            'type' => $obj['type'],
            'rating' => $obj['rating'],
            'created_at' => $obj['created_at'],
            'updated_at' => $obj['updated_at'],
        );
    }

    return json_encode($arr);
}

function createMovies($name, $category, $type, $rating, $created_at, $updated_at)
{
    include "CBDD.php";

    $sql = "INSERT INTO `movies`(`name`, `category`, `type`, `rating`, `created_at`, `updated_at`) VALUES ('$name','$category','$type', " . floatval($rating) . ",'$created_at','$updated_at')";

    return mysqli_query($cnx, $sql);
}

function updateMovies($id, $name, $category, $type, $rating, $updated_at)
{
    include "CBDD.php";

    $sql = "UPDATE `movies` SET `name`='$name',`category`='$category',`type`='$type',`rating`=" . floatval($rating) . ",`updated_at`='$updated_at' WHERE `id` = $id";

    return mysqli_query($cnx, $sql);
}

function deleteMovies($id)
{
    include "CBDD.php";

    $sql = "DELETE FROM `movies` WHERE `id` = $id";

    return mysqli_query($cnx, $sql);
}
