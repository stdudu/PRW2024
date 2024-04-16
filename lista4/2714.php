<?php

    function senha($ra) {
        if (strlen($ra) !== 20 || substr($ra, 0, 2) !== "RA") {
            return "INVALID DATA";
        }

        $rasemra = substr($ra, 2);

        $zeros = ltrim($rasemra, '0');

        if (empty($zeros)) {
            return "INVALID DATA";
        }

        return $zeros;
    }

    $n = intval(trim(fgets(STDIN)));

    for ($i = 0; $i < $n; $i++) {
        $ra = trim(fgets(STDIN));
        $provisoria = senha($ra);
        echo $provisoria . "\n";
    }

?>