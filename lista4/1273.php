<?php

    $n = intval(readline());
    
    while(true) {
        if($n == 0)
            break;
        $resposta = "";
        $entrada = [];
        for($i = 0; $i < $n; $i++) {
            array_push($entrada, readline());
        }
        $maior = 0;
        foreach($entrada as $linha) {
            if(strlen($linha) > $maior)
                $maior = strlen($linha);
        }
        foreach($entrada as $linha) {
            $linha = str_pad($linha, $maior, " ", STR_PAD_LEFT);
            echo $linha . "\n";
        }
        $n = intval(readline());
        if($n != 0)
        echo "\n";
    }
    
?>