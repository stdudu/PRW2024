<?php

    $n = readline();
    $i = 0;
    
    while($i < $n) {
        list($a, $b) = explode(" ", readline());
    
        if($a == 0 and $b == 0) {
            break;
        }else{
            if(strlen($a) < strlen($b)) {
                echo "nao encaixa\n";
            }else{
                $a = substr($a, (strlen($a) - strlen($b)));
                if($a == $b) {
                    echo "encaixa\n";
                }else{
                    echo "nao encaixa\n";
                }
            }
        }
        $i++;
    }

?>