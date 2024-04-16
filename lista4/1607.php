<?php

    $n = intval(readline());
    $letras = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $resposta = 0;
    while ($n--) {
        list($inicial, $final) = explode(" ", readline());
        $inicial = str_split($inicial);
        $final = str_split($final);
        for ($i = 0; $i < count($inicial); $i++) {
            $letra = array_search($inicial[$i], $letras);
            while ($inicial[$i] != $final[$i]) {
                $resposta++;
                if ($letra == 25)
                    $letra = 0;
                else
                    $letra++;
                $inicial[$i] = $letras[$letra];
            }
        }
        echo "$resposta\n";
        $resposta = 0;
    }
    
?>