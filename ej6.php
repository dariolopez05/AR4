<?php

$notas = [6, 7, 2, 9, 5, 3, 8, 7, 4, 7];
$tam = count($notas);
$alta = 0;
$posalta = 0; 
$baja = 10;
$posbaja = 0;
$suma = 0;
$media = 0;

for ($i=0; $i < $tam-1; $i++) { 
    if ($notas[$i] > $alta) {
        $alta = $notas[$i];
        $posalta = $i;
    } 
    if ($notas[$i] < $baja) {
        $baja = $notas[$i];
        $posbaja = $i;
    }
    $suma += $notas[$i];
}
echo $alta;
echo $baja;
print_r(implode ((array_splice($notas, $posalta, $posbaja))));
$media = ($suma - $alta - $baja) / $tam - 1;
echo "La media es $media";

?>