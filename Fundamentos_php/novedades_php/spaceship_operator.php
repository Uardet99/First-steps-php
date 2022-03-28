<?php


# Este operador sirve para comparar dos datos 

// Regresa 1 si el valor en la izquierda es mayor que el de la derecha
// Regresa 0 si los valores en ambos lados son iguales
// Regresa -1 si el valor de la derecha es mayor que el de la izquierda

# <   =   >
# 1   0  -1

echo 2 <=> 2; # Nos devolvera 0
echo  '<br />';
echo 4 <=> 2; # Nos devolvera 1
echo  '<br />';
echo 2 <=> 4; # Nos devolvera -1
echo  '<br />';
echo  '<br />';



// Ahora vamos a ordenar un array sin utilizar la funcion sort()
echo 'Ordenar Array' . '<br />';
$array = [3,1,5,2,4];
//sort($array);

# Esta funcion nos ordenara los valores de nuestro array
/* function comparar ($a,$b) {
    if ($a == $b) {
        return 0;
    } else if ($a > $b) {
        return 1;
    } else {
        return -1;
    }
} */


# Vamos a crear una funcion identicamente a la anterior pero en 3 lineas.

function comparar ($a, $b) {
    return $a <=> $b;
}


usort($array,'comparar');
# La funcion implode() sirve para poner los '-' guiones entre los datos del array
echo implode(' - ',$array);
