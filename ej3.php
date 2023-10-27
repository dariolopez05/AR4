<?php

$numeros = [3, 4];
$pospar = 0;
$posimp = 0;
$pares = [];
$impar = [];

foreach ($numeros as $elem) {
    if ($elem % 2 == 0) {
        $pares[$pospar] = $elem;
        $pospar++;
    } else {
        $impar[$posimp] = $elem;
        $posimp++;
    }  
}

echo "Pares: ";
var_dump($pares);
echo "<br>";
echo "Impares: ";
var_dump($impar);

?>