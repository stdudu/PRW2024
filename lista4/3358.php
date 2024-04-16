<?php

    function verifica($sobrenome) {
        $consoantesConsecutivas = 0;

        $consoantes = "bcdfghjklmnpqrstvwxyz";

        $sobrenome = strtolower($sobrenome);

        for($i = 0; $i < strlen($sobrenome); $i++) {
            $letra = $sobrenome[$i];

            if(strpos($consoantes, $letra) !== false) {
                $consoantesConsecutivas++;
            } else {
                $consoantesConsecutivas = 0;
            }

            if($consoantesConsecutivas >= 3) {
                return " nao eh facil";
            }
        }

        return " eh facil";
    }

    $n = intval(trim(fgets(STDIN)));

    for($i = 0; $i < $n; $i++) {
        $sobrenome = trim(fgets(STDIN));

        echo $sobrenome.verifica($sobrenome)."\n";
    }

?>