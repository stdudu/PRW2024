<?php

    $n = intval(readline());
    
    while($n--) {
        $espelho = "";
        list($A, $B) = explode(" ", readline());
        while ($B >= $A)
            $espelho .= $A++;
        $espelho .= strrev($espelho);
        echo "$espelho\n";
    }
    
?>