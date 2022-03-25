<?php

$amigo = array('telefono' => 876543213, 'edad' => 20, 'pais' => 'mexico');

# Esta funcion se utiliza para importar variables desde una matriz a la tabla de simbolos actual, es decir, podremos extraer la informacion del array y mostrarla con un echo y el dato como variable
extract($amigo);

echo $telefono . '<br>';


$semana = array('Lunes','Martes','Miercoles',
'Jueves','Viernes','Sabado','Domingo');

# Esta funcion devuelve el valor del ultimo elemento de un array al igual que end() pero con estas diferencias
$ultimo_dia = array_pop($semana);
# De esta forma recorreremos el array y mostraremos la informacion que contiene, pero el ultimo dia no aparecera porque estamos utilizando la funcion array_pop()
foreach ($semana as $dia) {
    echo $dia . '<br>';
}
# Para que aparezca tendremos que guardar la funcion en una nueva variable y mostrala mediante un echo
 echo $ultimo_dia . '<br>';

# Esta funcion nos permite asociar 2 o mas tablas, en base a una columna que tengan en comun
echo join(', ', $semana);

# Esta funcion nos permite saber cuantos elementos hay en nuestro array
count($semana);

# Esta funcion nos permite ordenar los datos descendentemente
sort($semana);

# Esta funcion nos permite ordenar los datos ascendentemente
rsort($semana);


?>