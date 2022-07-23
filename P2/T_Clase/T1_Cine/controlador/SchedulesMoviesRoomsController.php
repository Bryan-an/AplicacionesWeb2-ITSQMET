<?php

if (isset($_GET['crud'])) {
    include "../modelo/SchedulesMoviesRoomsModel.php";

    $crud = $_GET['crud'];

    switch ($crud) {
        case 'read':
            if (isset($_GET['searchText'])) {
                $searchText = $_GET['searchText'];

                echo "" . readSchedulesMoviesRooms($searchText);
            }

            break;

        case 'create':
            if (isset($_GET['schedule_id'])
                && isset($_GET['movie_id'])
                && isset($_GET['room_id'])
            ) {

                $schedule_id = $_GET['schedule_id'];
                $movie_id = $_GET['movie_id'];
                $room_id = $_GET['room_id'];

                echo "" . createSchedulesMoviesRooms($schedule_id, $movie_id, $room_id);
            }

            break;
        case 'update':
            if (isset($_GET['schedule_id_to_update'])
                && isset($_GET['movie_id_to_update'])
                && isset($_GET['room_id_to_update'])
                && isset($_GET['schedule_id'])
                && isset($_GET['movie_id'])
                && isset($_GET['room_id'])
            ) {

                $schedule_id_to_update = $_GET['schedule_id_to_update'];
                $movie_id_to_update = $_GET['movie_id_to_update'];
                $room_id_to_update = $_GET['room_id_to_update'];
                $schedule_id = $_GET['schedule_id'];
                $movie_id = $_GET['movie_id'];
                $room_id = $_GET['room_id'];

                echo "" . updateSchedulesMoviesRooms($schedule_id_to_update, $movie_id_to_update, $room_id_to_update, $schedule_id, $movie_id, $room_id);
            }

            break;
        case 'delete':
            if (isset($_GET['schedule_id'])
                && isset($_GET['movie_id'])
                && isset($_GET['room_id'])
            ) {
                $schedule_id = $_GET['schedule_id'];
                $movie_id = $_GET['movie_id'];
                $room_id = $_GET['room_id'];

                echo "" . deleteSchedulesMoviesRooms($schedule_id, $movie_id, $room_id);
            }

            break;
    }
}
