<?php

    while($n = fgets(STDIN)) {
        $asteriscos = (int)$n;
        $arvore = "";
        
        for($i = 0; $i <= $asteriscos; $i++) {
            if($i % 2 != 0) {
                for($a = 0; $a < (($asteriscos - $i) / 2); $a++) {
                    $arvore .= " ";
                }
                for($a = 0; $a < $i; $a++) {
                    $arvore .= "*";
                }
                $arvore .= "\n";
            }
        }
        for($a = 0; $a < (($asteriscos - 1) / 2); $a++) {
            $arvore .= " ";
        }
        $arvore .= "*";
        $arvore .= "\n";
        for($a = 0; $a < (($asteriscos - 3) / 2); $a++) {
            $arvore .= " ";
        }
        $arvore .= "***";
        $arvore .= "\n\n";
        echo "$arvore";
    }

?>