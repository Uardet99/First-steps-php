<?php

$texto = 'Hola Carlos';

# Esta funcion se usa bastante para escapar caracteres especiales cuando se trabaja con BBDD
echo htmlspecialchars($texto);

# Esta funcion elimina los espacion en blanco u otros caracteres al inicio y al final de una cadena
echo trim($texto);

# Esta funcion obtiene la longitud de una cadena y devuelve un numero entero
echo strlen($texto);

# Esta funcion nos permite realizar diversas modificaciones a una cadena de texto
echo substr($texto, 0, 4);

# Esta funcion convierte a mayusculas los caracteres de una cadena string
echo strtoupper($texto);

# Esta funcion convierte a minusculas los caracteres de una cadena string
echo strtolower($texto);

# Esta funcion devuelve la posicion de la primera coincidencia de la palabra caracter buscando en una cadena de texto
echo strpos($texto, 'H');

?>