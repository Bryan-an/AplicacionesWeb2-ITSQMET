<?php

if (isset($_GET['crud'])) {
    include "../modelo/RoomsModel.php";

    $crud = $_GET['crud'];

    switch ($crud) {
        case 'read':
            if (isset($_GET['searchText'])) {
                $searchText = $_GET['searchText'];
                echo "" . readRooms($searchText);
            }

            break;

        case 'create':
            if (isset($_GET['name'])
                && isset($_GET['capacity'])
                && isset($_GET['feature'])
                && isset($_GET['created_at'])
                && isset($_GET['updated_at'])
                && isset($_GET['movie_id'])) {

                $name = $_GET['name'];
                $capacity = $_GET['capacity'];
                $feature = $_GET['feature'];
                $created_at = $_GET['created_at'];
                $updated_at = $_GET['updated_at'];
                $movie_id = $_GET['movie_id'];

                echo "" . createRooms($name, $capacity, $feature, $created_at, $updated_at, $movie_id);
            }

            break;
        case 'update':
            if (isset($_GET['id'])
                && isset($_GET['name'])
                && isset($_GET['capacity'])
                && isset($_GET['feature'])
                && isset($_GET['updated_at'])
                && isset($_GET['movie_id'])) {

                $id = $_GET['id'];
                $name = $_GET['name'];
                $capacity = $_GET['capacity'];
                $feature = $_GET['feature'];
                $updated_at = $_GET['updated_at'];
                $movie_id = $_GET['movie_id'];

                echo "" . updateRooms($id, $name, $capacity, $feature, $updated_at, $movie_id);
            }

            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                echo "" . deleteRooms($id);
            }

            break;
    }
}
