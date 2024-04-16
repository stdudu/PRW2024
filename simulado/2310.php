<?php

    $n = readline();

    $saque = 0;
    $saqueponto = 0;
    $bloqueio = 0;
    $bloqueioponto = 0;
    $ataque = 0;
    $ataqueponto = 0;

    for($i = 0; $i < $n; $i++){
        $nome = readline();
        list($s, $b, $a) = explode(" ", readline());
        list($s1, $b1, $a1) = explode(" ", readline());
    
        $saque += $s;
        $saqueponto += $s1;
        $bloqueio += $b;
        $bloqueioponto += $b1;
        $ataque += $a;
        $ataqueponto += $a1;
    }

    $pors = ($saqueponto * 100) / $saque;
    $porb = ($bloqueioponto * 100) / $bloqueio;
    $pora = ($ataqueponto * 100) / $ataque;

    echo "Pontos de Saque: ", number_format(round($pors, 2, PHP_ROUND_HALF_UP), 2, '.', ''), " %.\n";
    echo "Pontos de Bloqueio: ", number_format(round($porb, 2,    PHP_ROUND_HALF_UP), 2, '.', ''), " %.\n";
    echo "Pontos de Ataque: ", number_format(round($pora, 2, PHP_ROUND_HALF_UP), 2, '.', ''), " %.\n";

?>