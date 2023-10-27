<?php

$numeros = [1, 2, 3, 4];
$tam = count($numeros);
$pospar = 0;
$posimp = 0;
$bidi = [
    'par' => [],
    'impar' => []
];

foreach ($numeros as $elem) {
    if ($elem % 2 == 0) {
        $bidi['par'][$pospar] = $elem;
        $pospar++;
    } else {
        $bidi['impar'][$posimp] = $elem;
        $posimp++;
    }  
}

echo "Pares: ";
echo implode("-", $bidi['par']);
echo "<br>";
echo "Impares: ";
echo implode("-", $bidi['impar']);

?>