<?php

    $n = intval(readline());

    $teclas = array(
        "a" => "2",
        "b" => "22",
        "c" => "222",
        "d" => "3",
        "e" => "33",
        "f" => "333",
        "g" => "4",
        "h" => "44",
        "i" => "444",
        "j" => "5",
        "k" => "55",
        "l" => "555",
        "m" => "6",
        "n" => "66",
        "o" => "666",
        "p" => "7",
        "q" => "77",
        "r" => "777",
        "s" => "7777",
        "t" => "8",
        "u" => "88",
        "v" => "888",
        "w" => "9",
        "x" => "99",
        "y" => "999",
        "z" => "9999",
        " " => "0");

    for($i = 0; $i < $n; $i++) {
        $s = readline();
        $r = array();
        $aux = false;
        for($j = 0; $j < strlen($s); $j++) {
            $tmp = "";
            if($aux and ctype_lower($s[$j]) and $teclas[strtolower($s[$j])][0] == $r[$j - 1][strlen($r[$j - 1]) - 1]) {
                $tmp .= '*';
            }
            if(ctype_upper($s[$j])) {
                $tmp .= '#';
            }
            $tmp .= $teclas[strtolower($s[$j])];
            $r[] = $tmp;
            $aux = true;
        }
        echo implode("", $r), "\n";
    }

?>