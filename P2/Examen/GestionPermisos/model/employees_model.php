<?php

function raed_employees($search_text)
{
    include "db_connection.php";

    // filtrar por las fechas y el tipo
    $sql = "SELECT * FROM `employees` WHERE `name` LIKE '%$search_text%' OR `last_name` LIKE '%$search_text%' OR `email` LIKE '%$search_text%' OR `id_card` LIKE '%$search_text%'";

    $result = mysqli_query($connection, $sql);

    $arr = array();

    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $arr[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'last_name' => $row['last_name'],
                'email' => $row['email'],
                'address' => $row['address'],
                'phone' => $row['phone'],
                'id_card' => $row['id_card'],
            );
        }
    }

    return json_encode($arr);
}

function create_employee($name, $last_name, $email, $address, $phone, $id_card)
{
    include 'db_connection.php';

    $sql = "INSERT INTO `employees` (`name`, `last_name`, `email`, `address`, `phone`, `id_card`) VALUES ('$name', '$last_name', '$email', '$address', '$phone', '$id_card');";

    return mysqli_query($connection, $sql);
}

function update_employee($id, $name, $last_name, $email, $address, $phone, $id_card)
{
    include 'db_connection.php';

    $sql = "UPDATE `employees` SET `name`= '$name', `last_name`= '$last_name', `email`= '$email', `address`= '$address', `phone` = '$phone', `id_card`= '$id_card', `updated_at` = CURRENT_TIMESTAMP WHERE `id` = $id";

    return mysqli_query($connection, $sql);
}

function delete_employee($id)
{
    include "db_connection.php";

    $sql = "DELETE FROM `employees` WHERE `id` = $id";

    return mysqli_query($connection, $sql);
}
