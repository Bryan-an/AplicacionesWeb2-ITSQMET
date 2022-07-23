<?php

function readSchedulesMoviesRooms($searchText)
{
    include "CBDD.php";

    $sql = "SELECT `s`.`id`, `s`.`start`, `s`.`end`, `m`.`id`, `m`.`name`, `m`.`category`, `m`.`type`, `m`.`rating`, `r`.`id`, `r`.`name`, `r`.`capacity`, `r`.`feature` FROM `schedules` AS `s` INNER JOIN `schedules_movies` AS `sm` ON `s`.`id` = `sm`.`schedule_id` INNER JOIN `rooms_movies` AS `rm` ON `sm`.`movie_id` = `rm`.`movie_id` INNER JOIN `movies` AS `m` ON `rm`.`movie_id` = `m`.`id` INNER JOIN `rooms` AS `r` ON `rm`.`room_id` = `r`.`id` WHERE `r`.`name` LIKE '%$searchText%' OR `m`.`name` LIKE '%$searchText%'";

    $result = mysqli_query($cnx, $sql);

    while ($obj = mysqli_fetch_array($result)) {

        $arr[] = array(
            'schedule_id' => $obj[0],
            'schedule_start' => $obj[1],
            'schedule_end' => $obj[2],
            'movie_id' => $obj[3],
            'movie_name' => $obj[4],
            'movie_category' => $obj[5],
            'movie_type' => $obj[6],
            'movie_rating' => $obj[7],
            'room_id' => $obj[8],
            'room_name' => $obj[9],
            'room_capacity' => $obj[10],
            'room_feature' => $obj[11],
        );
    }

    return json_encode($arr);
}

function createSchedulesMoviesRooms($schedule_id, $movie_id, $room_id)
{
    include "CBDD.php";

    $sql1 = "INSERT INTO `rooms_movies`(`room_id`, `movie_id`) VALUES ('$room_id','$movie_id')";
    $sql2 = "INSERT INTO `schedules_movies`(`schedule_id`, `movie_id`) VALUES ('$schedule_id','$movie_id')";
    $result = "0";

    if (mysqli_query($cnx, $sql1)) {
        $result = "1";
    }

    if (mysqli_query($cnx, $sql2)) {
        $result = "1";
    }

    return $result;
}

function updateSchedulesMoviesRooms($schedule_id_to_update, $movie_id_to_update, $room_id_to_update, $schedule_id, $movie_id, $room_id)
{
    include "CBDD.php";

    $sql1 = "UPDATE `rooms_movies` SET `room_id` = $room_id, `movie_id` = $movie_id WHERE `room_id` = $room_id_to_update AND `movie_id` = $movie_id_to_update";
    $sql2 = "UPDATE `schedules_movies` SET `schedule_id`= $schedule_id ,`movie_id`= $movie_id WHERE `schedule_id` = $schedule_id_to_update AND `movie_id` = $movie_id_to_update";

    $result = "0";

    if (mysqli_query($cnx, $sql1)) {
        $result = "1";
    }

    if (mysqli_query($cnx, $sql2)) {
        $result = "1";
    }

    return $result;
}

function deleteSchedulesMoviesRooms($schedule_id, $movie_id, $room_id)
{
    include "CBDD.php";

    $sql1 = "DELETE FROM `rooms_movies` WHERE `room_id` = $room_id AND `movie_id` = $movie_id";
    $sql2 = "DELETE FROM `schedules_movies` WHERE `schedule_id` = $schedule_id AND `movie_id` = $movie_id";

    $result = "0";

    if (mysqli_query($cnx, $sql1)) {
        $result = "1";
    }

    if (mysqli_query($cnx, $sql2)) {
        $result = "1";
    }

    return $result;
}
