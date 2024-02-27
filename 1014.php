<?php
$km = floatval(readline());
$l = floatval(readline());
$x = $km / $l;
$x = number_format($x, 3, ".", "");
echo"$x km/l\n";
?>