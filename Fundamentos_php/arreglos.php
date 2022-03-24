<?php 

# Tipos de formas de crear un array:
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
$arreglo = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

# Si queremos saber que dia se almacena en cada posicion del array tendremos que colocar dentro de [] la posicion que le pertenezca a cada dia de la semana.
echo $semana[0];

# Como modificar un array:   
$semana[7] = 'IndianOcean';

# En un array puedes guardar toda clase de valores, es decir, desde cadenas de texto, numeros, decimales, boolean.

# Forma de recorrer un array (no es la mas adecuada).
echo $semana[0] . '<br />'; 
echo $semana[1] . '<br />';
echo $semana[2] . '<br />';
echo $semana[3] . '<br />';
echo $semana[4] . '<br />';
echo $semana[5] . '<br />';
echo $semana[6] . '<br />';

?>