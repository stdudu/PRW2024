<?php
    $l = intval(readline());
    $c= intval(readline());
    $s = $l + $c;
    if(($s % 2) == 0){
        echo 1, "\n";
    }
    else{
        echo 0, "\n";
    }
?>