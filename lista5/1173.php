<?php

    $valor = intval(trim(fgets(STDIN)));
    $x = [$valor];

    for($i = 1; $i < 10; $i++) {
        $x[$i] = $x[$i - 1] * 2;
    }

    for($i = 0; $i < 10; $i++) {
        echo "N[$i] = {$x[$i]}\n";
    }

?>