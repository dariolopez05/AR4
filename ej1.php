<?php

$numeros = [1, 2, 3, 4, 5];
$long = count($numeros) - 1;
echo $long;

while ($long >= 0) {
    echo $numeros[$long], "<br>";
    $long--; 
}

?>