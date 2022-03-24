<?php

// Notas:
# Los nombres de las variables son sensibles a mayusculas y minusculas
# Los nombres de variables no pueden llevas espacios, empezar por numeros o llevar caracteres especiales como puntos

// Tipos de datos:
# String: cadenas de texto
# Integer: numeros enteros
# Double: numeros con decimales
# Boolean: verdadero o falso (true / false)
# Array: areglo
# Object: objeto
# Class: clase
# Null: cuando a una variable aun no se le a asignado un valor


// Ejemplos de variables almacenando diferentes tipos de datos:

# String
$nombre = 'Carlos';

# Integer
$numeros = 7;

#Double
$numero_decimal = 7.7;

#Boolean
$verdadero = false;

// Comillas sencillas vs Comillas dobles:
# En las comillas senciallas podemos llamar variables, mientras que en las sencillas no.
# Sin embargo usar comillas dobles en ciertas situaciones puede traernos problemas de seguridad.

echo 'Mi nombre es ' . $nombre;
echo '<br>';

# gettype es una funcion que nos dice que tipo de dato almacena la variable
echo gettype($numeros);

?>