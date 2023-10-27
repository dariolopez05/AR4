<?php

$numeros = [1, 2, 3, 4, 3, 3, 4, 1, 5];
$tam = count($numeros);
$duplicados = 0;

for ($i=0; $i < $tam-1; $i++) { 
    for ($j=$i+1; $j < $tam; $j++) { 
        if ($numeros[$i] == $numeros[$j]) {
            echo "$numeros[$i] se repite", "<br>";
        }
    }
}

?>