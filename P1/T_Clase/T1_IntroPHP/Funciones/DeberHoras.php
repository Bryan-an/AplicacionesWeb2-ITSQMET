<?php

function calculateHours($start, $end)
{
    $workStartHour = 8;
    $workEndHour = 17;

    $startHour = intval(explode(':', $start)[0]);
    $startMinutes = intval(explode(':', $start)[1]);
    $endHour = intval(explode(':', $end)[0]);
    $endMinutes = intval(explode(':', $end)[1]);

    $startHourDiff = 0;
    $startMinutesDiff = 0;

    if ($startHour >= $workStartHour) {
        $startHourDiff = $startHour - $workStartHour;

        if ($startMinutes > 0) {
            $startMinutesDiff = $startMinutes;
        }
    }

    $endHourDiff = 0;
    $endMinutesDiff = 0;

    if ($endHour < $workEndHour) {

        if ($endMinutes == 0) {
            $endHourDiff = $workEndHour - $endHour;
        } else {
            $endHourDiff = $workEndHour - $endHour - 1;
        }

        if ($endMinutes > 0) {
            $endMinutesDiff = 60 - $endMinutes;
        }
    }

    return "<h3>Tiene un atraso de: $startHourDiff horas con $startMinutesDiff minutos</h3><br><h3>Su hora de salida fue: $endHourDiff horas con $endMinutesDiff minutos antes</h3>";
}
