<?php

function calculateThirteenthSalary($startDate, $endDate, $salary, $extraHours)
{
    $ts1 = strtotime($startDate);
    $ts2 = strtotime($endDate);

    $year1 = date('Y', $ts1);
    $year2 = date('Y', $ts2);

    $month1 = date('m', $ts1);
    $month2 = date('m', $ts2);

    $months = floatval(($year2 - $year1) * 12) + ($month2 - $month1);

    $salary = floatval($salary);
    $extraHours = floatval($extraHours);

    return (($salary * $months) + $extraHours) / 12;
}

function calculateFourteenthSalary($startDate, $endDate)
{

    $ts1 = strtotime($startDate);
    $ts2 = strtotime($endDate);

    $year1 = date('Y', $ts1);
    $year2 = date('Y', $ts2);

    $month1 = date('m', $ts1);
    $month2 = date('m', $ts2);

    $day1 = date('d', $ts1);
    $day2 = date('d', $ts2);

    $days = floatval(($year2 - $year1) * 360) + (($month2 - $month1) * 30) + ($day2 - $day1);

    $sbu = 425;

    return ($days * $sbu) / 360;
}
