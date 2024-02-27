<?php
$a = readline();
$b = doubleval(readline());
$c = doubleval(readline());
$x = (($c * 0.15) + $b);
echo "TOTAL = R$ ".number_format($x,2,'.','')."\n";
?>