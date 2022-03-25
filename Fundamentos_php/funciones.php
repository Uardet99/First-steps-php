<?php

/* count();
sort();
rsort();
var_dump();
print_r(); */

// Sintaxi de una funcion:
function saludo() {
    echo "Saludos, Usuario" . '<br>';
}
// Para ejecutar esta funcion tendremos que llamarla:
 saludo();



// Sintaxi de una funcion con un parametro:
function saludo_usuario ($name_user) {
    echo 'Saludos ' . $name_user . '<br>';
}
// Para ejecutar esta funcion tendremos que llarmarla de la misma forma pero pasandole un parametro, en este caso un nombre.
saludo_usuario('Edu');



// Sintaxi de una funcion con dos parametros:
function sumar ($num1, $num2) {
    $resultado = $num1 + $num2;
    echo $resultado;
}
// Para ejecutar esta funcion tendremos que llamarla y pasarle dos parametros para su correcto funcionamiento
sumar(10,10);

?>