<?php
$pi = 3.14159;
list($A, $B, $C) = explode(" ", readline());

$tri = $A * $C/2 ;
$tri = number_format($tri, 3, ".", "");
echo "TRIANGULO: $tri\n";
$cir = $pi * ($C * $C) ;
$cir = number_format($cir, 3, ".", "");
echo "CIRCULO: $cir\n";
$tra = ($A+$B)*$C/2;
$tra = number_format($tra, 3, ".", "");
echo "TRAPEZIO: $tra\n";
$qua = $B*$B;
$qua = number_format($qua, 3, ".", "");
echo "QUADRADO: $qua\n";
$ret = $A * $B;
$ret = number_format($ret, 3, ".", "");
echo "RETANGULO: $ret\n";
?>