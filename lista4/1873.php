<?php

    function pedraquebratesoura($rajesh, $sheldon) {
        $joguinho = [
            'tesoura' => ['papel', 'lagarto'],
            'papel' => ['pedra', 'spock'],
            'pedra' => ['lagarto', 'tesoura'],
            'lagarto' => ['spock', 'papel'],
            'spock' => ['tesoura', 'pedra']
        ];

        if ($rajesh === $sheldon) {
            return 'empate';
        }

        if (in_array($sheldon, $joguinho[$rajesh])) {
            return 'rajesh';
        }

        return 'sheldon';
    }

    $n = intval(trim(fgets(STDIN)));

    for ($i = 0; $i < $n; $i++) {
        list($rajesh, $sheldon) = explode(' ', trim(fgets(STDIN)));

        echo pedraquebratesoura($rajesh, $sheldon)."\n";
    }

?>