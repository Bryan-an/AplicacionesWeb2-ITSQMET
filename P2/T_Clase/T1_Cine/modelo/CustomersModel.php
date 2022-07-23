<?php

function readCustomers($sql)
{
    include "CBDD.php";

    $result = mysqli_query($cnx, $sql);

    while ($obj = mysqli_fetch_array($result)) {
        $arr[] = array(
            'id' => $obj['id'],
            'name' => $obj['name'],
            'last_name' => $obj['last_name'],
            'id_card' => $obj['id_card'],
            'email' => $obj['email'],
            'date_of_birth' => $obj['date_of_birth'],
            'created_at' => $obj['created_at'],
            'updated_at' => $obj['updated_at'],
        );
    }

    return json_encode($arr);
}

function executeQuery($sql)
{
    include "CBDD.php";

    return mysqli_query($cnx, $sql);
}
