<?php

function calcular_area_triangulo ($base, $altura) {
    $area = ($base * $altura) / 2;
    return $area;
}

$area_trinagulo = calcular_area_triangulo(10,10);
echo ' El triangulo tiene un area de ' . $area_trinagulo . ' metros cuadrados';

?>