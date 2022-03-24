<?php

$edad = 18;

# Esta linea de codigo hace la misma funcion que un if, es decir, entre (condicion) va la condicion despues del ? nuestra variable y despues de los : val el mensaje en caso de que no se cumpla la condicion
$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad' ;

echo 'Edad: ' . $edad;

?>