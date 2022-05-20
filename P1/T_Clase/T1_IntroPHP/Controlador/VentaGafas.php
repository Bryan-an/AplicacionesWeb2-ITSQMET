<!-- Hacer un sistema para una tienda de gafas de sol, el cual necesita como parámetros de entrada la cantidad y el precio. Al pagar el total de la factura el sistema debe considerar:
a.Si el monto total es superior a $85 tiene un descuento del 10% del total de la factura
b.Si el monto total es superior a $100 tiene un descuento del 15% del total de la factura
c.Si el monto total es superior a $115 tiene un descuento del 20% del total de la factura -->

<?php

if (isset($_GET['cant']) && isset($_GET['prec'])) {
    $cant = $_GET['cant'];
    $prec = $_GET['prec'];
    $total = calcularPrecioDescuento($cant, $prec);
    echo "<h1>El total es: </h1><h2>$total</h2>";
}

function calcularPrecioDescuento($cantidad, $precio)
{
    $total = $cantidad * $precio;

    if ($total >= 85 && $total < 100) {
        $total = $total * 0.90;
    } else if ($total >= 100 && $total < 115) {
        $total = $total * 0.85;
    } else if ($total >= 115) {
        $total = $total * 0.80;
    }

    return $total;
}