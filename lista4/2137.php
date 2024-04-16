<?php

    while(true) {
        $n = intval(trim(fgets(STDIN)));
        if ($n == 0) {
            break;
        }

        $codigos = [];

        for ($i = 0; $i < $n; $i++) {
            $codigo = trim(fgets(STDIN));
            $codigos[] = $codigo;
        }

        sort($codigos);

        foreach ($codigos as $codigo) {
            echo $codigo . "\n";
        }
    }

?>