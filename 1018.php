<?php
$valor = intval(readline());
$cedulas = [100, 50, 20, 10, 5, 2, 1];
echo $valor . "\n";
foreach($cedulas as $cedula)
{
    $notas = intval($valor / $cedula);
    $valor %= $cedula;
    $cedula = number_format($cedula, 2, ',','');
    echo $notas . " nota(s) de R$ $cedula\n";
}
?>