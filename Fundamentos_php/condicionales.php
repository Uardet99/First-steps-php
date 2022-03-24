<?php

# Sintaxi del condicional if
//if(condicion) {
    //Intrucciones
//}

/* Operadores de comparacion:

== Igualdad
< Menor que
> Mayor que 
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negacion

*/

/* Operadores logicos:

&& - Evalua que se cumplen las 2 condiciones
||, OR - Evalua que se cumpla al menos una condicion
XOR - Evalua que se cumpla una y solo una condicion 

*/ 

$edad = 13;
$nombre = 'Carlos';



if ($edad >= 18 XOR $nombre == 'Carlos') {
    echo '<h1> Bienvenido </h1>';
}

/* if ($edad < 18 OR $nombre != 'Carlos') {
    echo '<h1> Eres memor de edad y/o no te llamas Carlos </h1>';
} */

?>