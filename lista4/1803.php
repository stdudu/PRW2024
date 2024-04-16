<?php

    $entrada = [];
    array_push($entrada, readline());
    array_push($entrada, readline());
    array_push($entrada, readline());
    array_push($entrada, readline());
    $coluna = [];
    
    for($i = 0; $i < strlen($entrada[0]); $i++) {
        $f = intval($entrada[0][$i]) * 1000;
        $f += intval($entrada[1][$i]) * 100;
        $f += intval($entrada[2][$i]) * 10;
        $f += intval($entrada[3][$i]);
        $coluna[] = $f;
    }
    for($i = 1; $i < count($coluna) - 1; $i++) {
        echo chr(($coluna[0] * $coluna[$i] + $coluna[count($coluna) - 1]) % 257);
    }
    echo "\n";
    
?>