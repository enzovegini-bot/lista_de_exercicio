<?php

// (x² + y²) / (x+y)

0 references
function  calculadoraFormula($x,$y) {
    if ($x + $y == 0) {
        return "não é possível dividir por zero";
    }
    $resultado = (pow($x,2) + pow($y,2))/($x + $y);
    return $resultado;
}

$x = 10;
$y = 5;
echo "valor de x: $x <br>";
echo "valor de y: $y <br>";
?>