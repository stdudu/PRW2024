<?php

    while(true) {
        $R = readline();
        
        if($R == false)
            break;
            
        $P = intval(readline());
        
        for($i = $P; $i > 0; $i--)
            $R = str_replace(str_repeat('R', $i), 'W', $R);
        echo strlen($R)."\n";
    }

?>



    function calcular($rastro, $processos) {
        $leituras = 0;
        $gravacoes = 0;

        for($i = 0; $i < strlen($rastro); $i++) {
            $acao = $rastro[$i];

            if($acao == 'R') {
                $leituras++;
            } else {
                $gravacoes++;
            }
        }

        $ciclos = max($leituras, ceil($gravacoes / $processos));

        return $ciclos;
    }

    while(true) {
        $rastro = trim(fgets(STDIN));
        if($rastro === false) {
            break;
        }

        $processos = intval(trim(fgets(STDIN)));

        echo calcular($rastro, $processos) . "\n";
    }
