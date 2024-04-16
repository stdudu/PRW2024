<?php

    $n = intval(readline());
    
    while($n--) {
        $num = str_split(readline());
        if(($num[0] == 'o' and $num[1] == 'n') || ($num[0] == 'o' and $num[2] == 'e') || ($num[1] == 'n' and $num[2] == 'e')) {
            echo "1\n";
        } elseif(($num[0] == 't' and $num[1] == 'w') || ($num[0] == 't' and $num[2] == 'o') || ($num[1] == 'w' and $num[2] == 'o')) {
            echo "2\n";
        } else {
            echo "3\n";
        }
    }

?>