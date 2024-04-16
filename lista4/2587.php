<?php

    $n = intval(readline());
    
    for ($i = 0; $i < $n; $i++) {
        $duvida1 = readline();
        $duvida2 = readline();
        $duvida1 = str_split($duvida1);
        $duvida2 = str_split($duvida2);
        $adivinhar = readline();
        $adivinhar = str_split($adivinhar);
        $caracteres = array_keys($adivinhar, "_");
        
        if ($duvida1[$caracteres[0]] == $duvida2[$caracteres[1]] || $duvida1[$caracteres[1]] == $duvida2[$caracteres[0]])
        $resposta = "Y\n";
        else
        $resposta = "N\n";
        echo $resposta;
    }

?>