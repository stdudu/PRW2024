<?php

    $n = intval(readline());
    
    for($i = 0; $i < $n; $i++) {
        $num = intval(readline());
        $linguas = [];
        for($c = 0; $c < $num; $c++)
            array_push($linguas, readline());
        if(count(array_unique($linguas)) != 1)
            echo "ingles\n";
        else
            echo $linguas[0] . "\n";
    }
    
?>