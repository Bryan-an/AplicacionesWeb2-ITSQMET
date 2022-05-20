<?php

// Construir un software que permita el ingreso de una frase de tal menara que se imprima la cantidad de vocales encontradas en aquella frase ingresada.

function cantVocales($frase)
{
    $fraseArr = str_split(strtolower($frase));
    $a = 0;
    $e = 0;
    $i = 0;
    $o = 0;
    $u = 0;

    for ($j = 0; $j < sizeof($fraseArr); $j++) {
        switch ($fraseArr[$j]) {
            case 'a':
                $a++;
                break;
            case 'e':
                $e++;
                break;
            case 'i':
                $i++;
                break;
            case 'o':
                $o++;
                break;
            case 'u':
                $u++;
                break;
        }
    }

    $numVocales = "a = $a <br>";
    $numVocales .= "e = $e <br>";
    $numVocales .= "i = $i <br>";
    $numVocales .= "o = $o <br>";
    $numVocales .= "u = $u";

    return $numVocales;
}
