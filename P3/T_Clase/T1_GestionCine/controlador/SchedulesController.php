<?php

if (isset($_GET['crud'])) {
    include "../modelo/SchedulesModel.php";

    $crud = $_GET['crud'];

    switch ($crud) {
        case 'read':
            if (isset($_GET['searchText'])) {
                $searchText = $_GET['searchText'];
                echo "" . readSchedules($searchText);
            }

            break;

        case 'create':
            if (isset($_GET['start'])
                && isset($_GET['end'])
                && isset($_GET['created_at'])
                && isset($_GET['updated_at'])
            ) {

                $start = $_GET['start'];
                $end = $_GET['end'];
                $created_at = $_GET['created_at'];
                $updated_at = $_GET['updated_at'];

                echo "" . createSchedules($start, $end, $created_at, $updated_at);
            }

            break;
        case 'update':
            if (isset($_GET['id'])
                && isset($_GET['start'])
                && isset($_GET['end'])
                && isset($_GET['updated_at'])
            ) {

                $id = $_GET['id'];
                $start = $_GET['start'];
                $end = $_GET['end'];
                $updated_at = $_GET['updated_at'];

                echo "" . updateSchedules($id, $start, $end, $updated_at);
            }

            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                echo "" . deleteSchedules($id);
            }

            break;
    }
}
