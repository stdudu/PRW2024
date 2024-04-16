<?php

    while(fscanf(STDIN, "%d%d%d", $n, $l, $c) !== false) {
        $conto = fgets(STDIN);
        $tamanhoConto = strlen($conto) - 1;
        $caracteres = $salvamento = 0;
        $linhas = $paginas = 1;
        for ($i = 0; $i < $tamanhoConto; ++$i) {
            if($i and $conto[$i - 1] == ' ')
                $salvamento = $i;
            if($caracteres == $c) {
                ++$linhas;
                if($conto[$i] == ' ')
                    $caracteres = 0;
                else
                    $caracteres = $i - $salvamento + 1;
            }else
                ++$caracteres;
        }
        $paginas = ceil($linhas / $l);
        printf("%d\n", $paginas);
    }
    
?>