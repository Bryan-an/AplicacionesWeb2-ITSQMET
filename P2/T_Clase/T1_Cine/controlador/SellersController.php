<?php

if (isset($_GET['crud'])) {
    include "../modelo/SellersModel.php";

    $crud = $_GET['crud'];

    switch ($crud) {
        case 'read':
            if (isset($_GET['searchText'])) {
                $searchText = $_GET['searchText'];
                echo "" . readSellers($searchText);
            }

            break;

        case 'create':
            if (isset($_GET['name'])
                && isset($_GET['last_name'])
                && isset($_GET['phone'])
                && isset($_GET['address'])
                && isset($_GET['email'])
                && isset($_GET['date_of_birth'])
                && isset($_GET['id_card'])
                && isset($_GET['created_at'])
                && isset($_GET['updated_at'])
            ) {

                $name = $_GET['name'];
                $last_name = $_GET['last_name'];
                $phone = $_GET['phone'];
                $address = $_GET['address'];
                $email = $_GET['email'];
                $date_of_birth = $_GET['date_of_birth'];
                $id_card = $_GET['id_card'];
                $created_at = $_GET['created_at'];
                $updated_at = $_GET['updated_at'];

                echo "" . createSellers($name, $last_name, $phone, $address, $email, $date_of_birth, $id_card, $created_at, $updated_at);
            }

            break;
        case 'update':
            if (isset($_GET['id'])
                && isset($_GET['name'])
                && isset($_GET['last_name'])
                && isset($_GET['phone'])
                && isset($_GET['address'])
                && isset($_GET['email'])
                && isset($_GET['date_of_birth'])
                && isset($_GET['id_card'])
                && isset($_GET['updated_at'])
            ) {

                $id = $_GET['id'];
                $name = $_GET['name'];
                $last_name = $_GET['last_name'];
                $phone = $_GET['phone'];
                $address = $_GET['address'];
                $email = $_GET['email'];
                $date_of_birth = $_GET['date_of_birth'];
                $id_card = $_GET['id_card'];
                $updated_at = $_GET['updated_at'];

                echo "" . updateSellers($id, $name, $last_name, $phone, $address, $email, $date_of_birth, $id_card, $updated_at);
            }

            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                echo "" . deleteSellers($id);
            }

            break;
    }
}
