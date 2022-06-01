<?php

// Realizar un programa que permita imprimir los 10 primeros
// números primos a partir del número ingresado por el usuario

function calculatePrimeNumbers($initNumber)
{
    $resp = "";

    $count = 0;
    $number = $initNumber;

    while ($count < 10) {
        $divisors = 1;

        for ($i = 2; $i <= $number; $i++) {
            if ($number % $i == 0) {
                $divisors++;
            }
        }

        if ($divisors == 2) {
            $resp .= "[$number]";
            $count++;
        }

        $number++;
    }

    return $resp;
}
