<?php

    $x = [];

    for($i = 0; $i < 10; $i++) {
        $valor = intval(trim(fgets(STDIN)));
        $x[] = max(1, $valor);
    }
    
    for($i = 0; $i < 10; $i++) {
        echo "X[$i] = {$x[$i]}\n";
    }

?>