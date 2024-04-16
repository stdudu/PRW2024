<?php

    function soma($M, $N) {
        $soma = $M + $N;

        $resultado = str_replace('0', '', (string)$soma);

        return $resultado;
    }

    while(true) {
        list($M, $N) = explode(' ', trim(fgets(STDIN)));
        if($M == 0 && $N == 0) {
            break;
        }

        echo soma($M, $N) . "\n";
    
    }

?>