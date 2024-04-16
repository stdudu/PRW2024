<?php
$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; ++$i) {
    $encod = rtrim(fgets(STDIN));
    $shift = intval(fgets(STDIN));
    $decod = "";
    for ($j = 0; $j < strlen($encod); ++$j) {
        $char = $encod[$j];
        if ($char >= 'A' && $char <= 'Z') {
            $decod .= chr(((ord($char) - $shift - ord('A') + 26) % 26) + ord('A'));
        } else {
            $decod .= $char;
        }
    }
    echo "$decod\n";
}
?>