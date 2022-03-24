<?php 

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 
    'Mayo', 'Junio', 'Julio', 'Agosto', 
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'    
);

# Con la funcion count podemos contar el numero de valores que almacena nuestro array
//echo count($meses);

# Ahora estamos contando los valores del array $meses y restandole 1 para que tenga 11 posiciones. Lo estamos almacenando dentro de otra variable.
$ultimo_mes = count($meses) - 1;
echo $meses[$ultimo_mes];

?>