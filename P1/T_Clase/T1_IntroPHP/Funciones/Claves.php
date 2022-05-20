<?php

// Construir un programa que permita validar la contraseña ingresada por el usuario, es decir, debería solicitar:
// a.Ingreso de contraseña
// b.Confirmación de la contraseña
// c.Verificación de que las los contraseñas ingresadas sean las mismasd.Imprimir esta verificación

function confirmarClaves($claveO, $claveC)
{
    if ($claveO == $claveC) {
        return "Claves iguales";
    } else {
        return "Claves distintas";
    }
}
