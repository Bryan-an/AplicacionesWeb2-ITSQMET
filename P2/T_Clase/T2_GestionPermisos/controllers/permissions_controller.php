<?php

if (isset($_GET['crud'])) {
    include '../model/permissions_model.php';

    $crud = $_GET['crud'];

    switch ($crud) {
        case 'read':
            if (isset($_GET['search_text'])) {
                $search_text = $_GET['search_text'];
                echo "" . raed_permissions($search_text);
            }

            break;

        case 'create':
            if (isset($_GET['start_date'])
                && isset($_GET['end_date'])
                && isset($_GET['type'])
                && isset($_GET['observation'])
            ) {
                $start_date = $_GET['start_date'];
                $end_date = $_GET['end_date'];
                $type = $_GET['type'];
                $observation = $_GET['observation'];

                echo "" . create_permission($start_date, $end_date, $type, $observation);
            }

            break;

        case 'update':
            if (isset($_GET['id'])
                && isset($_GET['start_date'])
                && isset($_GET['end_date'])
                && isset($_GET['type'])
                && isset($_GET['observation'])
                && isset($_GET['state'])
            ) {
                $id = $_GET['id'];
                $start_date = $_GET['start_date'];
                $end_date = $_GET['end_date'];
                $type = $_GET['type'];
                $observation = $_GET['observation'];
                $state = $_GET['state'];

                echo "" . update_permission($id, $start_date, $end_date, $type, $observation, $state);
            }

            break;

        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                echo "" . delete_permission($id);
            }

            break;
    }
}
