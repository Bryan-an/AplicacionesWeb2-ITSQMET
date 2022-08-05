<?php

function readSellers($searchText)
{
    include "CBDD.php";

    $sql = "SELECT * FROM `sellers` WHERE `name` LIKE '%$searchText%' OR `last_name` LIKE '%$searchText%' OR `id_card` LIKE '%$searchText%'";

    $result = mysqli_query($cnx, $sql);

    while ($obj = mysqli_fetch_array($result)) {
        $arr[] = array(
            'id' => $obj['id'],
            'name' => $obj['name'],
            'last_name' => $obj['last_name'],
            'phone' => $obj['phone'],
            'address' => $obj['address'],
            'email' => $obj['email'],
            'date_of_birth' => $obj['date_of_birth'],
            'id_card' => $obj['id_card'],
            'created_at' => $obj['created_at'],
            'updated_at' => $obj['updated_at'],
        );
    }

    return json_encode($arr);
}

function createSellers($name, $last_name, $phone, $address, $email, $date_of_birth, $id_card, $created_at, $updated_at)
{
    include "CBDD.php";

    $sql = "INSERT INTO `sellers`(`name`, `last_name`, `phone`, `address`, `email`, `date_of_birth`, `id_card`, `created_at`, `updated_at`) VALUES ('$name','$last_name','$phone','$address','$email','$date_of_birth','$id_card','$created_at','$updated_at')";

    return mysqli_query($cnx, $sql);
}

function updateSellers($id, $name, $last_name, $phone, $address, $email, $date_of_birth, $id_card, $updated_at)
{
    include "CBDD.php";

    $sql = "UPDATE `sellers` SET `name`='$name',`last_name`='$last_name',`phone`='$phone',`address`='$address',`email`='$email',`date_of_birth`='$date_of_birth',`id_card`='$id_card',`updated_at`='$updated_at' WHERE `id` = $id";

    return mysqli_query($cnx, $sql);

}

function deleteSellers($id)
{
    include "CBDD.php";

    $sql = "DELETE FROM `sellers` WHERE `id` = $id";

    return mysqli_query($cnx, $sql);
}
