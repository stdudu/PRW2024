<?php

    function imprime($n, $l, $c) {
        for($ll = 0; $ll < $n; $ll++) {
            for($cc = 0; $cc < $n; $cc++) {
                if($cc == $c and $ll == $l) {
                    echo "X";
                }else{
                    echo "O";
                }
            }
            echo "\n";
        }
        echo "@\n";
    }
    $n = 0;
    while($n = intval(readline()) and $n > 0) {
        $ctd = 1;
        $i = 1;
        $continue = true;
        $c = ceil($n / 2) - 1;
        $l = ceil($n / 2) - 1;
        imprime($n, $l, $c);
        
        while(true) {
            for($x = 0; $x < $ctd; $x++) {
                $c = $c + $i;
                if($c >= $n) {
                    $continue = false;
                    break;
                }
                imprime($n, $l, $c);
            }
            if(!$continue)
                break;
            $i = $i * -1;
            for($x = 0; $x < $ctd; $x++) {
                $l = $l + $i;
                if($l >= $n) {
                    $continue = false;
                    break;
                }
                imprime($n, $l, $c);
            }
            if(!$continue)
                break;
                
            $ctd++;
        }
    }
?>