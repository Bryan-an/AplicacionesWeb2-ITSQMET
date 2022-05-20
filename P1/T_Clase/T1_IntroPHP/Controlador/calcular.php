<?php

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];
$op = $_GET['op'];

if ($op == "sum") {
    echo $n1 + $n2 + $n3; // php toma las variables como números si ve operadores aritméticos (depende de la versión)
} else if ($op == "res") {
    echo $n1 - $n2 - $n3;
} else if ($op == "mul") {
    echo $n1 * $n2 * $n3;
} else if ($op == "div") {
    echo $n1 / $n2 / $n3;
}
