<?php

if (isset($_GET['startDate']) && isset($_GET['endDate']) && isset($_GET['salary']) && isset($_GET['extraHours'])) {
    include './salary.php';

    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];
    $salary = $_GET['salary'];
    $extraHours = $_GET['extraHours'];

    $thirteenthSalary = calculateThirteenthSalary($startDate, $endDate, $salary, $extraHours);
    $fourteenthSalary = calculateFourteenthSalary($startDate, $endDate);

    echo "<h3>El decimo tercer salario es: $thirteenthSalary </h3><br><h3>El decimo cuarto salario es: $fourteenthSalary </h3>";
}
