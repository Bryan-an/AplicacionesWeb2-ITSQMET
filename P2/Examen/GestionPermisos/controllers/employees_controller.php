<?php

if (isset($_GET['crud'])) {
    include '../model/employees_model.php';

    $crud = $_GET['crud'];

    switch ($crud) {
        case 'read':
            if (isset($_GET['search_text'])) {
                $search_text = $_GET['search_text'];
                echo "" . raed_employees($search_text);
            }

            break;

        case 'create':
            if (isset($_GET['name'])
                && isset($_GET['last_name'])
                && isset($_GET['email'])
                && isset($_GET['address'])
                && isset($_GET['phone'])
                && isset($_GET['id_card'])
            ) {
                $name = $_GET['name'];
                $last_name = $_GET['last_name'];
                $email = $_GET['email'];
                $address = $_GET['address'];
                $phone = $_GET['phone'];
                $id_card = $_GET['id_card'];

                echo "" . create_employee($name, $last_name, $email, $address, $phone, $id_card);
            }

            break;

        case 'update':
            if (isset($_GET['id'])
                && isset($_GET['name'])
                && isset($_GET['last_name'])
                && isset($_GET['email'])
                && isset($_GET['address'])
                && isset($_GET['phone'])
                && isset($_GET['id_card'])
            ) {
                $id = $_GET['id'];
                $name = $_GET['name'];
                $last_name = $_GET['last_name'];
                $email = $_GET['email'];
                $address = $_GET['address'];
                $phone = $_GET['phone'];
                $id_card = $_GET['id_card'];

                echo "" . update_employee($id, $name, $last_name, $email, $address, $phone, $id_card);
            }

            break;

        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                echo "" . delete_employee($id);
            }

            break;
    }
}
