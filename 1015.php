<?php
list($A, $B) = explode(" ", readline());
list($C, $D) = explode(" ", readline());
$dist = pow(pow($C - $A,2) + pow($D - $B,2),0.5);
$dist = number_format($dist, 4, ".", "");
echo "$dist\n";
?>