<?php

$numeros = [1, 2, 3, 4, 3, 3, 4, 1, 5];
$duplicados = [];
$tam = count($numeros);
$cont = 1;

for ($i=0; $i < $tam-1; $i++) {
    if (!in_array($numeros[$i], $duplicados)){
        array_push($duplicados, $numeros[$i]);
        for ($j=$i+1; $j < $tam; $j++) { 
            if ($numeros[$i] == $numeros[$j]) {
                $cont++;
            }            
        }
        echo "El $numeros[$i] se repite: $cont veces <br>";
    }
    
    $cont = 1;
}

?>