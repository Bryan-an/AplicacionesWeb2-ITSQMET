<!-- Crear un sistema de votación en el cual:
a.Si elije al candidato A imprimir: “Usted ha votado por el candidato A”
b.Si elije al candidato B imprimir: “Usted ha votado por el candidato B”
c.Si elije al candidato C imprimir: “Usted ha votado por el candidato C -->

<?php

if (isset($_GET['voto'])) {
    $voto = $_GET['voto'];
    $resp = imprimirVotacion($voto);
    echo $resp;
}

function imprimirVotacion($voto)
{
    return "<h1>Usted ha votado por el candidato $voto</h1>";
}