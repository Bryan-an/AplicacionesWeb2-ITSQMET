<?php

if (isset($_GET['crud'])) {
    include "../modelo/MoviesModel.php";

    $crud = $_GET['crud'];

    switch ($crud) {
        case 'read':
            if (isset($_GET['searchText'])) {
                $searchText = $_GET['searchText'];
                echo "" . readMovies($searchText);
            }

            break;

        case 'create':
            if (isset($_GET['name'])
                && isset($_GET['category'])
                && isset($_GET['type'])
                && isset($_GET['rating'])
                && isset($_GET['created_at'])
                && isset($_GET['updated_at'])) {

                $name = $_GET['name'];
                $category = $_GET['category'];
                $type = $_GET['type'];
                $rating = $_GET['rating'];
                $created_at = $_GET['created_at'];
                $updated_at = $_GET['updated_at'];

                echo "" . createMovies($name, $category, $type, $rating, $created_at, $updated_at);
            }

            break;
        case 'update':
            if (isset($_GET['id'])
                && isset($_GET['name'])
                && isset($_GET['category'])
                && isset($_GET['type'])
                && isset($_GET['rating'])
                && isset($_GET['updated_at'])
            ) {

                $id = $_GET['id'];
                $name = $_GET['name'];
                $category = $_GET['category'];
                $type = $_GET['type'];
                $rating = $_GET['rating'];
                $updated_at = $_GET['updated_at'];

                echo "" . updateMovies($id, $name, $category, $type, $rating, $updated_at);
            }

            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                echo "" . deleteMovies($id);
            }

            break;
    }
}
