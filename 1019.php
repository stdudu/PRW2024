<?php
$seg = intval(readline());
$h = floor($seg / 3600);
$m = floor(($seg % 3600)/60);
$s = $seg % 60;
echo "$h:$m:$s"."\n";
?>