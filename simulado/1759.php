<?php
$n = intval(readline());
$laugh = "";
for($i=0;$i<$n;$i++)
{
    $laugh .= "Ho";
    //verificando se é a ultima posicao do iterador
    if($i < $n - 1){
        $laugh .= " ";
    }
    else{
        $laugh .= "!";
    }
}
echo $laugh."\n";
?>